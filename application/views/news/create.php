
<div class="card col s12">
<div class="card-content">
<h5 class="text-shadow"><?php echo $title; ?></h5>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/create'); ?>    

 
	  <div class="row">
        <div class="input-field col s12">
          <input name="title" type="text" class="validate">
          <label for="title">Title</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="text" type="text">
          <label for="text">Text</label>
        </div>
      </div>
	  <button class="waves-effect waves-light btn blue darken-1"><input type="submit" name="submit" value="Create news"/></button>
</form>
</div>
</div>