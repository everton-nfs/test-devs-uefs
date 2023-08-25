<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Lista de Usuários</h2>
        <ul class="list-group">
            @foreach ($users as $user)
                <li class="list-group-item">{{ $user->name }}</li>
            @endforeach
        </ul>
    </div>

    <main class="container mt-4">
        <h2>Postagens dos Usuários</h2>
        <div class="row mb-2">
            @foreach ($users as $user)
                @foreach ($user->posts as $post)
                    <div class="col-md-6">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <strong class="d-inline-block mb-2 text-primary-emphasis">{{ $post->tags->implode('name', ', ') }}</strong>
                                <h3 class="mb-0">{{ $post->title }}</h3>
                                <div class="mb-1 text-body-secondary">{{ $post->created_at->format('d M') }}</div>
                                <p class="card-text mb-auto">{{ $post->description }}</p>
                                <!-- <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                                    Continue reading
                                    <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                                </a> -->
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </main>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <h2>Recent Posts</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-4">
            <div class="entry2">
              <a href="single.html"><img src="images/img_1.jpg" alt="Image" class="img-fluid rounded"></a>
              <div class="excerpt">
                <span class="post-category text-white bg-secondary mb-3">Politics</span>
                <h2><a href="single.html">The AI magically removes moving objects from videos.</a></h2>
                <div class="post-meta align-items-center text-left clearfix">
                  <figure class="author-figure mb-0 mr-3 float-left"><img src="images/person_1.jpg" alt="Image"
                      class="img-fluid"></figure>
                  <span class="d-inline-block mt-1">By <a href="#">Carrol Atkinson</a></span>
                  <span>&nbsp;-&nbsp; July 19, 2019</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed
                  optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro
                  id est.</p>
                <p><a href="#">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="entry2">
              <a href="single.html"><img src="images/img_2.jpg" alt="Image" class="img-fluid rounded"></a>
              <div class="excerpt">
                <span class="post-category text-white bg-success mb-3">Nature</span>
                <h2><a href="single.html">The AI magically removes moving objects from videos.</a></h2>
                <div class="post-meta align-items-center text-left clearfix">
                  <figure class="author-figure mb-0 mr-3 float-left"><img src="images/person_1.jpg" alt="Image"
                      class="img-fluid"></figure>
                  <span class="d-inline-block mt-1">By <a href="#">Carrol Atkinson</a></span>
                  <span>&nbsp;-&nbsp; July 19, 2019</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed
                  optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro
                  id est.</p>
                <p><a href="#">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="entry2">
              <a href="single.html"><img src="images/img_3.jpg" alt="Image" class="img-fluid rounded"></a>
              <div class="excerpt">
                <span class="post-category text-white bg-warning mb-3">Travel</span>
                <h2><a href="single.html">The AI magically removes moving objects from videos.</a></h2>
                <div class="post-meta align-items-center text-left clearfix">
                  <figure class="author-figure mb-0 mr-3 float-left"><img src="images/person_1.jpg" alt="Image"
                      class="img-fluid"></figure>
                  <span class="d-inline-block mt-1">By <a href="#">Carrol Atkinson</a></span>
                  <span>&nbsp;-&nbsp; July 19, 2019</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed
                  optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro
                  id est.</p>
                <p><a href="#">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="entry2">
              <a href="single.html"><img src="images/img_1.jpg" alt="Image" class="img-fluid rounded"></a>
              <div class="excerpt">
                <span class="post-category text-white bg-secondary mb-3">Politics</span>
                <h2><a href="single.html">The AI magically removes moving objects from videos.</a></h2>
                <div class="post-meta align-items-center text-left clearfix">
                  <figure class="author-figure mb-0 mr-3 float-left"><img src="images/person_1.jpg" alt="Image"
                      class="img-fluid"></figure>
                  <span class="d-inline-block mt-1">By <a href="#">Carrol Atkinson</a></span>
                  <span>&nbsp;-&nbsp; July 19, 2019</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed
                  optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro
                  id est.</p>
                <p><a href="#">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="entry2">
              <a href="single.html"><img src="images/img_2.jpg" alt="Image" class="img-fluid rounded"></a>
              <div class="excerpt">
                <span class="post-category text-white bg-success mb-3">Nature</span>
                <h2><a href="single.html">The AI magically removes moving objects from videos.</a></h2>
                <div class="post-meta align-items-center text-left clearfix">
                  <figure class="author-figure mb-0 mr-3 float-left"><img src="images/person_1.jpg" alt="Image"
                      class="img-fluid"></figure>
                  <span class="d-inline-block mt-1">By <a href="#">Carrol Atkinson</a></span>
                  <span>&nbsp;-&nbsp; July 19, 2019</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed
                  optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro
                  id est.</p>
                <p><a href="#">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="entry2">
              <a href="single.html"><img src="images/img_4.jpg" alt="Image" class="img-fluid rounded"></a>
              <div class="excerpt">
                <span class="post-category text-white bg-danger mb-3">Sports</span>
                <h2><a href="single.html">The AI magically removes moving objects from videos.</a></h2>
                <div class="post-meta align-items-center text-left clearfix">
                  <figure class="author-figure mb-0 mr-3 float-left"><img src="images/person_1.jpg" alt="Image"
                      class="img-fluid"></figure>
                  <span class="d-inline-block mt-1">By <a href="#">Carrol Atkinson</a></span>
                  <span>&nbsp;-&nbsp; July 19, 2019</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed
                  optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro
                  id est.</p>
                <p><a href="#">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="entry2">
              <a href="single.html"><img src="images/img_1.jpg" alt="Image" class="img-fluid rounded"></a>
              <div class="excerpt">
                <span class="post-category text-white bg-success mb-3">Nature</span>
                <h2><a href="single.html">The AI magically removes moving objects from videos.</a></h2>
                <div class="post-meta align-items-center text-left clearfix">
                  <figure class="author-figure mb-0 mr-3 float-left"><img src="images/person_1.jpg" alt="Image"
                      class="img-fluid"></figure>
                  <span class="d-inline-block mt-1">By <a href="#">Carrol Atkinson</a></span>
                  <span>&nbsp;-&nbsp; July 19, 2019</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed
                  optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro
                  id est.</p>
                <p><a href="#">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="entry2">
              <a href="single.html"><img src="images/img_2.jpg" alt="Image" class="img-fluid rounded"></a>
              <div class="excerpt">
                <span class="post-category text-white bg-danger mb-3">Sports</span>
                <span class="post-category text-white bg-secondary mb-3">Tech</span>
                <h2><a href="single.html">The AI magically removes moving objects from videos.</a></h2>
                <div class="post-meta align-items-center text-left clearfix">
                  <figure class="author-figure mb-0 mr-3 float-left"><img src="images/person_1.jpg" alt="Image"
                      class="img-fluid"></figure>
                  <span class="d-inline-block mt-1">By <a href="#">Carrol Atkinson</a></span>
                  <span>&nbsp;-&nbsp; July 19, 2019</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed
                  optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro
                  id est.</p>
                <p><a href="#">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <div class="entry2">
              <a href="single.html"><img src="images/img_4.jpg" alt="Image" class="img-fluid rounded"></a>
              <div class="excerpt">
                <span class="post-category text-white bg-danger mb-3">Sports</span>
                <span class="post-category text-white bg-warning mb-3">Lifestyle</span>
                <h2><a href="single.html">The AI magically removes moving objects from videos.</a></h2>
                <div class="post-meta align-items-center text-left clearfix">
                  <figure class="author-figure mb-0 mr-3 float-left"><img src="images/person_1.jpg" alt="Image"
                      class="img-fluid"></figure>
                  <span class="d-inline-block mt-1">By <a href="#">Carrol Atkinson</a></span>
                  <span>&nbsp;-&nbsp; July 19, 2019</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor laudantium sed
                  optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo, aliquid, dicta beatae quia porro
                  id est.</p>
                <p><a href="#">Read More</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row text-center pt-5 border-top">
          <div class="col-md-12">
            <div class="custom-pagination">
              <span>1</span>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <span>...</span>
              <a href="#">15</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
