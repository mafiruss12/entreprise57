<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Service; // Ajoutez cette ligne
use App\Models\ServiceRequest; // Ajoutez cette ligne
class DashboardController extends Controller
{
 

public function showArtisan(Request $request)
    {
        $user = Auth::user();

        if ($user->role !== 'client') {
            return redirect()->route('dashboard')->with('error', 'Unauthorized access.');
        }
        // Initialiser la requête avec une relation avec l'utilisateur
        $query = Service::with('user');
        // Appliquer les filtres
        if ($request->filled('service')) {
            $query->where('title', 'like', '%' . $request->service . '%');
        }

        if ($request->filled('location')) {
            $query->where('location', 'like', '%' . $request->location . '%');
        }

        if ($request->filled('prestataire')) {
            $query->whereHas('user', function ($q) use ($request) {
                $q->where('name', 'like', '%' . $request->prestataire . '%')
                  ->orWhere('surname', 'like', '%' . $request->prestataire . '%');
            });
        }

        if ($request->filled('availability')) {
            $query->where('availability', $request->availability);
        }

        // Exécuter la requête et obtenir les résultats
        $services = $query->get();

        // Passer les artisans et les services à la vue
        $artisans = User::where('role', 'prestataire')->get();
      
        return view('dashboard.client', compact('artisans', 'services'));
    
    }
       //
       public function index()
       {
        
        $user = Auth::user();

        if ($user->role !== 'prestataire') {
            return redirect()->route('dashboard.client')->with('error', 'Unauthorized access.');
        }

        // Fetch services provided by the logged-in prestataire
        $services = Service::where('user_id', $user->id)->get();

        // Fetch clients who have made requests to these services
        $clients = User::whereHas('serviceRequests', function ($query) use ($services) {
            $query->whereIn('service_id', $services->pluck('id'));
        })->get();

        return view('dashboard.index', compact('clients', 'services'));
    }
    // app/Http/Controllers/DashboardController.php

    // public function showClients()
    // {
    //     $user = Auth::user();
    
    //         $clients = collect(); // Empty collection if not a prestataire
        
    
    //     return view('dashboard.index', compact('clients'));
    // }
    public function requestService(Request $request)
    {
        try {
            \Log::info('Request received', $request->all());  // Log the request data

            // Validate the request data
            $request->validate([
                'service_id' => 'required|exists:services,id',
                'prestataire_id' => 'required|exists:users,id',
                'desired_date' => 'required|date',
                'description' => 'required|string|max:255',
            ]);

            // Get the client ID and the service ID from the request
            $clientId = Auth::id();
            $serviceId = $request->input('service_id');
            $prestataireId = $request->input('prestataire_id');
            $desiredDate = $request->input('desired_date');
            $description = $request->input('description');

            // Check if the request already exists
            $existingRequest = ServiceRequest::where('service_id', $serviceId)
                                ->where('client_id', $clientId)
                                ->first();

            if ($existingRequest) {
                return response()->json(['status' => $existingRequest->status]);
            }

            // Create a new service request
            $serviceRequest = new ServiceRequest([
                'service_id' => $serviceId,
                'client_id' => $clientId,
                'prestataire_id' => $prestataireId,
                'status' => 'pending',
                'desired_date' => $desiredDate,
                'description' => $description,
            ]);

            $serviceRequest->save();

            \Log::info('Service request created', $serviceRequest->toArray());  // Log the created service request

            return response()->json(['status' => 'pending']);
        } catch (\Exception $e) {
            \Log::error('Error processing service request: ' . $e->getMessage());  // Log the error message
            return response()->json(['error' => 'Error processing service request'], 500);
        }
    }
}
