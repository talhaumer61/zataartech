<div class="page-body">
    <div class="container-fluid">
        <div class="card mt-4">
            <div class="card-body">
                <form 
                    action="{{ isset($contact) 
                        ? route('admin.contactinfo.update', $contact->id)
                        : route('admin.contactinfo.store') }}"
                    method="POST">
                    
                    @csrf
                    @if(isset($contact))
                        @method('POST')
                    @endif

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Heading <span class="text-danger">*</span></label>
                            <input type="text" name="heading" class="form-control" required
                                value="{{ old('heading', $contact->heading ?? '') }}">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Status</label>
                            <select name="status" class="form-select">
                                <option value="1" {{ old('status', $contact->status ?? 1) == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('status', $contact->status ?? 0) == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold">Description</label>
                            <textarea name="description" class="form-control" rows="3">{{ old('description', $contact->description ?? '') }}</textarea>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Address 1</label>
                            <input type="text" name="address1" class="form-control" 
                                value="{{ old('address1', $contact->address1 ?? '') }}">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Address 2</label>
                            <input type="text" name="address2" class="form-control" 
                                value="{{ old('address2', $contact->address2 ?? '') }}">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Phone 1</label>
                            <input type="text" name="phone1" class="form-control" 
                                value="{{ old('phone1', $contact->phone1 ?? '') }}">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Whatsapp</label>
                            <input type="text" name="phone2" class="form-control" 
                                value="{{ old('phone2', $contact->phone2 ?? '') }}">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Email 1</label>
                            <input type="email" name="email1" class="form-control" 
                                value="{{ old('email1', $contact->email1 ?? '') }}">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Email 2</label>
                            <input type="email" name="email2" class="form-control" 
                                value="{{ old('email2', $contact->email2 ?? '') }}">
                        </div>
                    </div>

                    <div class="mt-4 text-end">
                        <a href="{{ route('admin.contactinfo') }}" class="btn btn-outline-secondary me-2">
                            <i class="fa fa-arrow-left"></i> Back
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-save me-1"></i> {{ isset($contact) ? 'Update' : 'Save' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>