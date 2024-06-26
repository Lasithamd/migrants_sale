 <fieldset>
  <legend>Basic information:</legend>

<div class="row form-group select-condition">
    <label class="col-sm-2">Condition<span class="required">*</span></label>
    <div class="col-sm-9">
        <input type="radio" name="itemCon" value="new" id="new">
        <label for="new">New</label>
        <input type="radio" name="itemCon" value="used" id="used">
        <label for="used">Used</label>
    </div>
</div>
<div class="row form-group add-title">
    <label class="col-sm-2 label-title">Title<span class="required">*</span></label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="text" name="title" placeholder="Title for your Ad ">
    </div>
</div>

<div class="row form-group brand-name">
    <label class="col-sm-2 label-title">Make<span class="required">*</span></label>
    <div class="col-sm-2">
        <select name="feature1" id="">
            <option value="Toyota">Toyota</option>
            <option value="Nissan">Nissan</option>
        </select>
    </div>
    <label class="col-sm-2 label-title">Model</label>
    <div class="col-sm-2">
        <input type="text" class="form-control" name="feature2" placeholder="ex, Sony Xperia dual sim 100% brand new ">
    </div>
    <label class="col-sm-2 label-title">Year of registration<span class="required">*</span></label>
    <div class="col-sm-2">
        <select name="feature3">
        <option value="2000">2000</option>
        <option value="2001">2001</option></select>
    </div>
</div>
<div class="row form-group brand-name">
<label class="col-sm-2 label-title">Fuel type<span class="required">*</span></label>
    <div class="col-sm-2">
        <select name="feature4" id="">
            <option value="Automaic">Automaic</option>
            <option value="Manual">Manual</option>
        </select>
    </div>
    <label class="col-sm-2 label-title">Engine</label>
    <div class="col-sm-2">
        <input type="text" class="form-control" name="feature5" placeholder="ex, Sony Xperia dual sim 100% brand new ">
    </div>
    <label class="col-sm-2 label-title">Current mileage</label>
    <div class="col-sm-2">
        <input type="text" class="form-control" name="feature6" placeholder="ex, Sony Xperia dual sim 100% brand new ">
    </div>
</div>

<div class="row form-group select-price">
    <label class="col-sm-2 label-title">Decription</span></label>
    <div class="col-sm-10">
       <textarea name="description" class="form-control"  id="description"></textarea>
    </div>
</div>
<div class="row form-group select-price">
    <label class="col-sm-2 label-title">Price</span></label>
    <div class="col-sm-3">
       <input type="number" name="price" class="form-control"  id="description">
    </div>
    <div class="col-sm-2">
       <input type="radio" name="negotiable" value="negotiable" id="negotiable">
        <label for="negotiable">Negotiable </label>
    </div>
</div>
</fieldset>


