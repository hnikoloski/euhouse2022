jQuery(document).ready(function ($) {

  if ($('.blog-archive .single-blog').length) {
    let featuredBlog = $('.blog-archive .single-blog:nth-of-type(1)');
    let smallerBlogs = $('.blog-archive .single-blog:nth-of-type(2), .blog-archive .single-blog:nth-of-type(3), .blog-archive .single-blog:nth-of-type(4)');
    let restBlogs = $('.blog-archive .single-blog:not(:nth-of-type(1),:nth-of-type(2), :nth-of-type(3), :nth-of-type(4))');
    featuredBlog.wrap('<div class="col-6 featured-blog"></div>')
    smallerBlogs.wrapAll('<div class="col-6 small-blogs"></div>')
    restBlogs.wrapAll('<div class="col-12 regular-blogs"></div>');
  }


});
