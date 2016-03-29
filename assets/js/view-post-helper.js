jQuery( document ).ready( function($) {
	// Click the new View Post button
	$('#edit-slug-box').on( 'click', '#view-post-buttons', function(e) {
		e.preventDefault();
		var href = $('#sample-permalink a').attr('href');
		window.open( href, '_self' );
	});
	
	// Generate the View Post button on page load. Because it is no longer around since 4.4.
	var edit_slug = $('#edit-slug-buttons');
	var view_post_html = '&nbsp;<span id="view-post-buttons"><button type="button" class="button button-small hide-if-no-js" aria-label="View Post">View Post</button></span>';
	edit_slug.after( view_post_html );
});