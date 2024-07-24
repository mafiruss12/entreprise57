<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function requestService(Request $request)
{
    try {
        \Log::info('Request received', $request->all());  // Log the request data

        $request->validate([
            'service_id' => 'required|exists:services,id',
        ]);

        $clientId = Auth::id();
        $serviceId = $request->input('service_id');
        $prestataireId = $request->input('prestataire_id');

        // Check if the request already exists
        $existingRequest = ServiceRequest::where('service_id', $serviceId)
                            ->where('client_id', $clientId)
                            ->first();

        if ($existingRequest) {
            return response()->json(['status' => $existingRequest->status]);
        }

        $serviceRequest = new ServiceRequest([
            'service_id' => $serviceId,
            'client_id' => $clientId,
            'prestataire_id' => $prestataireId,
            'status' => 'pending',
            'description' => 'Requesting service',
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
