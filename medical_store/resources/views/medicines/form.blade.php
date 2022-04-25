{{ csrf_field() }}
<div class="form-group">
    <label for="name">Medicine Name</label>
    <input type="text" name="medicine_name" value="{{ old('medicine_name') ?? $medicine->medicine_name}}" class="form-control">    
    {{$errors->first('medicine_name')}}
</div>

<div class="form-group">
    <label for="strength">Medicine Strength</label>
    <input type="text" name="medicine_strength" value="{{ old('medicine_pack_quantity') ?? $medicine->medicine_strength }}" class="form-control"> 
    {{$errors->first('medicine_strength')}}
</div>

<div class="form-group">
    <label for="generic">Medicine Generic Name</label>
    <input type="text" name="medicine_generic_name" value="{{ old('medicine_pack_quantity') ?? $medicine->medicine_generic_name }}" class="form-control"> 
    {{$errors->first('medicine_generic_name')}}
</div>

<div class="form-group">
    <label for="quantity">Unit Quantity In A Packet</label>
    <input type="text" name="medicine_pack_quantity" value="{{ old('medicine_pack_quantity') ?? $medicine->medicine_pack_quantity }}" class="form-control"> 
    {{$errors->first('medicine_pack_quantity')}}
</div>

<div class="form-group">
    <label for="sprice">Packet Price</label>
    <input type="text" name="medicine_price" value="{{ old('medicine_pack_quantity') ?? $medicine->medicine_price }}" class="form-control"> 
    {{$errors->first('medicine_price')}}
</div>

 

<div class="form-group">
    <label for="medicine_status">Status</label>
    <select name="medicine_status" id="medicine_status" class= "form-control">
        <option value="" disabled>Select Medidcine Status</option>
        <option value="1" {{ $medicine->medicine_status == 'Available' ? 'selected' : ''}} >Available</option> <!-- Eita kaj kore nah -->
        <option value="0" {{ $medicine->medicine_status == 'Unavailable' ? 'selected' : ''}}>Unavailable</option>
    </select>
</div>

<div class="form-group">
    <label for="location_rack_id">Location Rack</label>
    <select name="location_rack_id" id="location_rack_id" class= "form-control">
        <option value="" disabled>Select Location Rack</option>
        @foreach($racks as $rack)
        <option value="{{ $rack->id }}">{{ $rack->number }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="manufracturer_id">Manufracturer Company </label>
    <select name="manufracturer_id" id="manufracturer_id" class= "form-control">
    <option value="" disabled>Select Manufracturer Company</option>
        @foreach($manufracturers as $manufracturer)
        <option value="{{ $manufracturer->id }}">{{ $manufracturer->manufracturer_name }}</option>
        @endforeach
    </select>
</div>
<div>
<label for="medicine_cat_id">Medicine Category </label>
    <select name="medicine_cat_id" id="medicine_cat_id" class= "form-control">
        <option value="" disabled>Select Medicine Category</option>
        @foreach($categories as $category)
        <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
        @endforeach
    </select>
</div>