<div class="row">
    <div class="col-sm-12">
        <small class=text-secondary><i class="fas fa-user-tie"></i> &nbsp Employee Details</small>
    </div>
    <div class="col-sm-6">
        <x-form-input label="{{ __('Last Name') }}" name="last_name" />
    </div>
    <div class="col-sm-6">
        <x-form-input label="{{ __('First Name') }}" name="first_name" />
    </div>
    <div class="col-sm-12">
        <x-form-input label="{{ __('Address') }}" name="address" placeholder="Bldg #, Street, Brgy, City/Municipality, Post code"/>
    </div>
    <div class="col-sm-12">
        <x-form-input label="{{ __('Email') }}" name="email" placeholder="google@example.com" />
    </div>
    <div class="col-sm-12">
        <hr>
    </div>
    <div class="col-sm-12">
        <small class=text-secondary><i class="fab fa-accusoft"></i> &nbsp Work Status</small>
    </div>
    <div class="col-sm-6">
        <label>Job Title</label>
        <select class="form-control" name="job">
            <option value="Customer Service Associate">Customer Service Associate</option>
            <option value="Marketing Manager">Marketing Manager </option>
            <option value="Business Analyst">Business Analyst </option>
            <option value="IT Help Desk">IT Help Desk </option>
            <option value="Cloud Engineer">Cloud Engineer </option>
            <option value="Software Engineer">Software Engineer </option>
        </select>
    </div>
    <div class="col-sm-6">
        <x-form-input label="{{ __('Salary') }}" name="salary" placeholder="15000-90000"/>
    </div>
    <div class="col-sm-6">
        <label>Office</label>
        <select class="form-control" name="office">
            <option value="OFFICE-A">OFFICE-A </option>
            <option value="OFFICE-B">OFFICE-B </option>
            <option value="OFFICE-C">OFFICE-C </option>
            <option value="OFFICE-D">OFFICE-D </option>
            <option value="OFFICE-E">OFFICE-E </option>
            <option value="OFFICE-F">OFFICE-F</option>
        </select>
    </div>
    <div class="col-sm-6">
        <label>Reports To</label>
        <select class="form-control" name="reports_to">
            <option value="Dr.Cooper">Dr.Cooper</option>
            <option value="Dr.Hofstadter">Dr.Hofstadter</option>
            <option value="Mr.Wolowitz">Mr.Wolowitz </option>
            <option value="Dr.Koothrappali">Dr.Koothrappali</option>
            <option value="Dr.Farrah-Fowler">Dr.Farrah-Fowler </option>
            <option value="Dr.Rostenkowski">Dr.Rostenkowski </option>
        </select>
    </div>
</div>