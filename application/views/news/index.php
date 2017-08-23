

	<div class="card col s12">
		<div class="card-content">
		<h5 class="text-shadow"><?php echo $title; ?></h5>
			<table>
				<thead>
				  <tr>
					  <th>Title</th>
					  <th>Content</th>
					  <th>Action</th>
				  </tr>
				</thead>
				<?php foreach ($news as $news_item): ?>
				<tbody>
				  <tr>
					<td><?php echo $news_item['title']; ?></td>
					<td><?php echo $news_item['text']; ?></td>
					<td>
						<a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View</a> | 
						<a href="<?php echo site_url('news/edit/'.$news_item['id']); ?>">Edit</a> | 
						<a href="<?php echo site_url('news/delete/'.$news_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
					</td>
				  </tr>
				</tbody>
				<?php endforeach; ?>
			</table>
		</div>
	</div>
