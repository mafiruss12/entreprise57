<form action="{{ route('service-request.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="artisan_service_id">Service</label>
        <select name="artisan_service_id" id="artisan_service_id" class="form-control" required>
            @foreach($artisanServices as $service)
                <option value="{{ $service->id }}">{{ $service->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="description">Description du Service</label>
        <textarea class="form-control" name="description" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Soumettre la Demande</button>
</form>