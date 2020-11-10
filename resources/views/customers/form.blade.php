<div class="row">
    <div class="col-sm-12">
        <small class=text-secondary><i class="fas fa-shopping-cart"></i> &nbsp Order Information</small> 
    </div>
    <div class="col-sm-6">
        <label>Product</label>
        <select class="form-control" name="item">
            <option value="BSOD-XGT">BSOD-XGT </option>
            <option value="BSOD-2F3">BSOD-2F3 </option>
            <option value="BSOD-2GF">BSOD-2GF </option>
            <option value="BSOD-VG5">BSOD-VG5 </option>
            <option value="BSOD-XX2">BSOD-XX2 </option>
            <option value="BSOD-TH2">BSOD-TH2 </option>
        </select>
    </div>

    <div class="col-sm-6">
        <label>Employee Representative </label>
        <select class="form-control" name="representative">
            <option value="OFFICE-A">OFFICE-A </option>
            <option value="OFFICE-B">OFFICE-B </option>
            <option value="OFFICE-C">OFFICE-C </option>
            <option value="OFFICE-D">OFFICE-D </option>
            <option value="OFFICE-E">OFFICE-E </option>
            <option value="OFFICE-F">OFFICE-F</option>
        </select>
    </div>
    <div class="col-sm-12">
        <hr>
        <small class=text-secondary><i class="fas fa-user-tie"></i> &nbsp Customer Information</small>
    </div>
    <div class="col-sm-12">

        <x-form-input label="{{ __('Company') }}" name="company" placeholder="Google LLC"/>
    </div>

    <div class="col-sm-4">

        <x-form-input label="{{ __('Title') }}" name="title" placeholder="Mr, Mrs, Ms, Dr, Prof" />
    </div>

    <div class="col-sm-4">

        <x-form-input label="{{ __('Last Name') }}" name="lastname" />
    </div>

    <div class="col-sm-4">
     
        <x-form-input label="{{ __('First Name') }}" name="firstname" /> 
    </div>
    <div class="col-sm-12">
        <hr>
        <small class=text-secondary><i class="fas fa-caravan"></i> &nbsp Billing Address</small>
    </div>
    <div class="col-sm-6">


        <x-form-input label="{{ __('Address') }}" name="address" placeholder="Bldg #, Street, Brgy, City/Municipality, Post code" />
    </div>
    <div class="col-sm-6">

        <x-form-input label="{{ __('Email') }}" name="email" placeholder="google@example.com" />
    </div>


</div>