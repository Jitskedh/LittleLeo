<div class="container m-auto grid grid-cols-3 gap-3 mr-5" id="formBack">
    <div class='row-start-1 row-end-2 col-start-1 col-end-4'>
        <h6>First name:</h6>
        <input type="text" placeholder="ex. Mary" id="firstName" name="frontFirstName" class='inputField'>
    </div>
    <div class='row-start-2 row-end-3 col-start-1 col-end-4'>
        @if($product->productName==="Forrest"|| $product->productName==="Pink Skies" )
            <h6>Last Name:</h6>
            <input type="text" placeholder="ex. Johnson" id="lastName" name="frontLastName" class='inputField'>
        @endif
    </div>
    <div class='row-start-3 row-end-4 col-start-1 col-end-4'>
        @if($product->productName==="Cloudy"|| $product->productName==="Forrest" )
            <h6>Date of birth:</h6>
            <input type="text" placeholder="ex. 23/05/2023" id="frontDateOfBirth" name="frontDateOfBirth" class='inputField'>
        @endif
    </div>
        <div class='row-start-3 row-end-4 col-start-1 col-end-4'>
        @if($product->productName==="Ocean")
            <h6>Initials:</h6>
            <input type="text" placeholder="ex. MJ" id="initials" name="frontInitials" class='inputField'>
        @endif
    </div>
</div>