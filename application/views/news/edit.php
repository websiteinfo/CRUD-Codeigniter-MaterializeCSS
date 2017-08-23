<div class="card col s12">
<div class="card-content">
<h5 class="text-shadow"><?php echo $title; ?></h5> 
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/edit/'.$news_item['id']); ?>

	  <div class="row">
        <div class="input-field col s12">
          <label for="title">Edit title</label>		
          <input name="title" type="text" value="<?php echo $news_item['title'] ?>">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="text" type="text" value="<?php echo $news_item['text'] ?>">
          <label for="text">Edit text</label>
        </div>
      </div>
	  <button class="waves-effect waves-light btn blue darken-1"><input type="submit" name="submit" value="Edit news"/></button>
</form>
</div>
</div>