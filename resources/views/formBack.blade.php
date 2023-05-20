
<div class="container m-auto grid grid-cols-3 gap-3 mr-5" id="formBack">
        <div class='row-start-1 row-end-2 col-start-1 col-end-2'>
            <h6>First name:</h6>
            <input type="text" placeholder="ex. Mary" class='inputField' id="backFirstName" name="backFirstName">
        </div>
        <div class='row-start-1 row-end-2 col-start-2 col-end-3'>
            <h6>Middle name:</h6>
            <input type="text" placeholder="ex. Jane"class='inputField' id="backMiddleName" name="backMiddleName">
        </div>
        <div class='row-start-1 row-end-2 col-start-3 col-end-4'>
            <h6>Last name:</h6>
            <input type="text" placeholder="ex. Johnson"class='inputField' id="backLastName" name="backLastName">
        </div>
        <div class='row-start-2 row-end-3 col-start-1 col-end-4'>
        <h6>Date of Birth:</h6>
        <input type="text" placeholder="ex. 23/05/2023"class='inputField' id="backDateOfBirth" name="backDateOfBirth">
    </div>

    <div class='row-start-3 row-end-4 col-start-1 col-end-2'>
        <h6>Weight</h6>
        <input type="text" placeholder="ex. 3.5kg"class='inputField' id="backWeight" name="backWeight">
    </div>
    <div class='row-start-3 row-end-4 col-start-2 col-end-3'>
        <h6>Length</h6>
        <input type="text" placeholder="ex. 53cm"class='inputField' id="backLength" name="backHeight">
    </div>
    <div class='row-start-3 row-end-4 col-start-3 col-end-4'>
        <h6>Time of Birth</h6>
        <input type="text" placeholder="ex. 14u50"class='inputField' id="backTimeOfBirth" name="backTimeOfBirth">
    </div>
    <div class='row-start-4 row-end-5 col-start-1 col-end-2'>
        <h6>Parents</h6>
        <select class="form-select" aria-label="Default select example" id="backParents" name="backParents">
            <option selected>Select option</option>
            <option value="1">Mom & Dad</option>
            <option value="2">Mom & Mom</option>
            <option value="3">Dad & Dad</option>
            <option value="4">Other</option>
        </select>
    </label>
</div>
<div class='row-start-4 row-end-5 col-start-2 col-end-4'>
    <h6>Other option</h6>
    <input type="text" placeholder="Other"class='inputField' id="backOther" name="backOther">
</div>
<div></div>
<div class='row-start-5 row-end-6 col-start-1 col-end-4'>
    <h6>Parents' Name:</h6>
    <input type="text" placeholder="ex. Lilly and Billie Johnson"class='inputField' id="backParentsName" name="backParentsName">
</div>
<div class='row-start-6 row-end-7 col-start-1 col-end-4'>
    @if($product->productName==="Cloudy"|| $product->productName==="Ocean" )
    <h6>Address:</h6>
    <input type="text" placeholder="ex. Henderstreet 56 5542 London"class='inputField' id="backAddress" name="backAddress">
    @endif
</div>
<div class='row-start-7 row-end-8 col-start-1 col-end-4'>
    <h6>Additional wishes?</h6>
    <input type="text" class='inputFieldLong' id="backAdditionalWishes" name="backAdditionalWishes">
</div>
</div>
</div>
