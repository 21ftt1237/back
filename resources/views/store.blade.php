@php
    $pageName = 'store';
    $store = 'netcom';
@endphp
@include('layouts.header')
<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
    <style>
        /* Your CSS styles go here */
        .main-section {
            float: right;
            background: #D9D9D9;
            width: 39.5%;
            margin-bottom: 100px;
            margin: 0 auto;
            padding: 10px;
            padding-left: 20px;
            padding-right: 55px;
            margin-top: 65px;
            margin-right: 5px;
            box-shadow: 0px 2px 7px 1px grey;
            height: 1570px;
        }


         .section1 {
  width: 1080px;
/*  width: 100%;*/

/*  width: 80%;*/
  height: 720px;
  overflow: hidden;
  float: left;

  justify-content: center;
  align-items: center;
  margin-top: 50px;
  margin-left: 45px;
  border-style: solid;
  border-color: black;
}
        
        .section2, .container, .items {
            margin: 10px;
            margin-left: 45px;
        }

        .section2 {
            width: 1080px;
        }

        .section2 .container {
            display: flex;
            width: 100%;
            height: max-content;
            flex-wrap: wrap;
            justify-content: center;
            margin: 10px auto;
        }

        .section2 .container .items {
            margin: 10px;
            width: 200px;
            height: 300px;
            background-color: white;
            border: 2.5px solid black;
            border-radius: 12px;
        }

        .section2 .container .items .name {
            text-align: center;
            background-color: yellow;
            height: 25px;
            padding-top: 4px;
            color: black;
            margin: 0;
        }

        .section2 .container .items .price {
            float: left;
            padding-left: 10px;
            display: block;
            width: 100%;
            color: rgb(255, 0, 0);
            font-weight: 650;
        }

        .section2 .container .items .info {
            padding-left: 10px;
            color: black;
        }

        .section2 .container .items .img img {
            width: 200px;
            height: 200px;
            margin: 0;
            padding: 0;
            border-radius: 12px;
            transition-duration: 0.8s;
        }

        .section2 .container .items .img {
            overflow: hidden;
            margin: 0;
        }

        .section2 .container .items:hover .img img {
            transform: scale(1.2);
            transition-duration: 0.8s;
            border-radius: 12px;
        }

        .items {
            overflow: hidden;
            position: relative;
        }

        .actions {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .heart-icon {
            padding-left: 20px;
            font-size: 20px;
            color: #D9D9D9;
            cursor: pointer;
            transition: color 0.3s;
        }

        .heart-icon:hover {
            color: #F6E71D;
        }

        .heart-icon.clicked {
            color: #F6E71D;
        }
    </style>
</head>
<body>
    
   <div class="main-section">

<div class="container">

  <div class="para">
<p>
  We strive to provide the best possible service for our clients. Please leave a review to let us know how we are doing and to share your experience with others.
</p>
</div>

<form id="review-form" action="index.html" method="post">
  <h2>Write Your Review</h2>
  <div id="rating">
    <svg class="star" id="1" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" style="fill: #f39c12;">
      <polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566"></polygon>
    </svg>
    <svg class="star" id="2" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" style="fill: #f39c12;">
      <polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566"></polygon>
    </svg>
    <svg class="star" id="3" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" style="fill: #f39c12;">
      <polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566"></polygon>
    </svg>
    <svg class="star" id="4" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" style="fill: #f39c12;">
      <polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566"></polygon>
    </svg>
    <svg class="star" id="5" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" style="fill: #808080;">
      <polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566"></polygon>
    </svg>
  </div>
  <span id="starsInfo" class="help-block">
    Click on a star to change your rating 1 - 5, where 5 = great! and 1 = really bad
  </span>
  <div class="form-group">
    <label class="control-label" for="review">Your Review:</label>
    <textarea class="form-control" rows="10" placeholder=" Write your review...." name="review" id="review"></textarea>
    <span id="reviewInfo" class="help-block pull-right">
      <span id="remaining">999</span> Characters remaining
    </span>
  </div>
  <h2>Your Info:</h2>
  <div class="form-group">
    <label for="name">Name:</label>
    <input class="form-control" type="text" placeholder="Name" name="name" id="name" value="">
  </div>
  <div class="form-group">
    <label for="city">Place:</label>
    <input class="form-control" type="text" placeholder="place" name="place" id="place" value="">
  </div>

  <button href="#" id="submit" class="submit-btn" type="submit">Submit</button>
  <input id="submitForm" type="submit" style="display:none;">
  <span id="submitInfo" class="help-block">
  </span>
</form>

<div class="h2">
<h2>Read what others have said about us:</h2>

<div id="review-container">
</div>

<script type="text/javascript">
  
function starsReducer(state, action) {
    switch (action.type) {
      case 'HOVER_STAR': {
        return {
          starsHover: action.value,
          starsSet: state.starsSet
        }
      }
      case 'CLICK_STAR': {
        return {
          starsHover: state.starsHover,
          starsSet: action.value
        }
      }
        break;
      default:
        return state
    }
  }

  var StarContainer = document.getElementById('rating');
  var StarComponents = StarContainer.children;

  var state = {
    starsHover: 0,
    starsSet: 4
  }

  function render(value) {
    for(var i = 0; i < StarComponents.length; i++) {
      StarComponents[i].style.fill = i < value ? '#f39c12' : '#808080'
    }
  }

  for (var i=0; i < StarComponents.length; i++) {
    StarComponents[i].addEventListener('mouseenter', function() {
      state = starsReducer(state, {
        type: 'HOVER_STAR',
        value: this.id
      })
      render(state.starsHover);
    })

    StarComponents[i].addEventListener('click', function() {
      state = starsReducer(state, {
        type: 'CLICK_STAR',
        value: this.id
      })
      render(state.starsHover);
    })
  }

  StarContainer.addEventListener('mouseleave', function() {
    render(state.starsSet);
  })

  var review = document.getElementById('review');
  var remaining = document.getElementById('remaining');
  review.addEventListener('input', function(e) {
    review.value = (e.target.value.slice(0,999));
    remaining.innerHTML = (999-e.target.value.length);
  })

  var form = document.getElementById("review-form")

  form.addEventListener('submit', function(e) {
    e.preventDefault();
    let post = {
      stars: state.starsSet,
      review: form['review'].value,
      name: form['name'].value,
      place: form['place'].value,
      
    }

    console.log(post)
  })

  document.getElementById('submit').addEventListener('click', function(e) {
    e.preventDefault();
    document.getElementById('submitForm').click();
  })

  var reviews = {
    reviews: [
      {

        stars: 2,
        name: 'C Bro', 
        place: 'Netcom',
        review: 'Bro ada jual nasi katok kh sini? kasi campur la bro'
      },{
        stars: 1,
        name: 'C tuha',
        place: 'Hospital Ripas',
        review: 'Adeyhh lai, ku ani tuha sdh, inglish na ku paham, cemana kn membali?'
      },{
        stars: 5,
        name: 'C boi',
        place: 'Uni Arcade',
        review: 'Gilak nais mousenya ku bali dri sini, very smooth yo'
      },
    ]

  }



  function ReviewStarContainer(stars) {
    var div = document.createElement('div');
    div.className = "stars-container";
    for (var i = 0; i < 5; i++) {
      var svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
      svg.setAttribute('viewBox',"0 12.705 512 486.59");
      svg.setAttribute('x',"0px");
      svg.setAttribute('y',"0px");
      svg.setAttribute('xml:space',"preserve");
      svg.setAttribute('class',"star");
      var svgNS = svg.namespaceURI;
      var star = document.createElementNS(svgNS,'polygon');
      star.setAttribute('points', '256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566');
      star.setAttribute('fill', i < stars ? '#f39c12' : '#808080');
      svg.appendChild(star);
      div.appendChild(svg);
    }
    return div;
  }

  function ReviewContentContainer(name, place, review) {

    var reviewee = document.createElement('div');
    reviewee.className = "reviewee footer";
    reviewee.innerHTML  = '- ' + name + ', ' + place

    var comment = document.createElement('p');
    comment.innerHTML = review;

    var div = document.createElement('div');
    div.className = "review-content";
    div.appendChild(comment);
    div.appendChild(reviewee);

    return div;
  }

  function ReviewsContainer(review) {
    var div = document.createElement('blockquote');
    div.className = "review";
    div.appendChild(ReviewStarContainer(review.stars));
    div.appendChild(ReviewContentContainer(review.name,review.place,review.review));
    return div;
  }

  for(var i = 0; i < reviews.reviews.length; i++) {
    document.getElementById('review-container').appendChild(ReviewsContainer(reviews.reviews[i]))
  }


  form.addEventListener('submit', function(e) {
  e.preventDefault();
  let post = {
    stars: state.starsSet,
    review: form['review'].value,
    name: form['name'].value,
    place: form['place'].value,
  };

  // Add the submitted review to the reviews container
  addReview(post);

  // Clear the form fields
  form.reset();
  remaining.innerHTML = '999';
  state = starsReducer(state, { type: 'CLICK_STAR', value: 4 });
  render(state.starsSet);
});



function addReview(review) {
  var reviewContainer = document.getElementById('review-container');
  var newReview = document.createElement('div');
  newReview.className = 'review';
  
  var starContainer = ReviewStarContainer(review.stars);
  var contentContainer = ReviewContentContainer(review.name, review.place, review.review);
  
  newReview.appendChild(starContainer);
  newReview.appendChild(contentContainer);
  
  reviewContainer.appendChild(newReview);
}

</script>

</div>

</div>



</div>
   
  </header>
  <section>
    <div class="section">
      <div class="section1">
        <div class="img-slider">
          <img src="image/razerstrider.png" alt="" class="img">
          <img src="image/g203.png" alt="" class="img">
          <img src="image/anker.png" alt="" class="img">
          <img src="image/razerkraken.png" alt="" class="img">
          <img src="image/corsairstand.png" alt="" class="img">
        </div>
        <div class="section2">
            <div class="container">
                <div class="containerPage">
                    <div class="list">
                        @foreach ($products as $product)
                            <div class="items">
                                <div class="img">
                                    <img src="{{ $product->image_link }}" alt="{{ $product->name }}">
                                </div>
                                <div class="name">{{ $product->name }}</div>
                                <div class="price">$ {{ $product->price }}</div>
                                <div class="info">{{ $product->description }}</div>
                                <div class="actions">
                                    <span class="heart-icon">❤</span>
                                    <!-- Other actions/icons can go here -->
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
@include('layouts.footer')
