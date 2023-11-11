<style>
  .main-section {
    display: none;
  }

  .h2 h2 {
    margin-top: 10px;
  }

  .h2 {
    margin-top: 20px;
    height: auto;
  }

  .submit-btn {
    width: 100%;
  }

/* Image slider   */
  .section1,
  .container .para .form-group {
    width: 80%;
    margin: 0 auto;
    padding: 10px;
    padding-left: 20px;
    margin-top: 65px;
    margin-right: 5px;
    box-shadow: 0px 2px 7px 1px grey;
    height: 300px;
  }


  /*products*/
  .section1,
  .section2,
  .container,
  .items {
    width: 100%;
    margin: 10px;
    margin-left: 0;
  }

  .section2 .container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .section2 .container .items {
    width: 100%;
    height: auto;
  }

  .section2 .container .items .name {
    height: auto;
  }

  .section2 .container .items .price {
    width: auto;
  }

  .section2 .container .items .info {
    padding-left: 10px;
    font-size: 10px;
  }

  .section2 .container .items .img img {
    width: 100%;
    height: auto;
    border-radius: 0;
    transition-duration: 0.8s;
  }

  .items {
    overflow: hidden;
  } 
    
    .desc {
    font-size: 11px;
  }
  .actions {
    display: flex;
    flex-direction: column;
  }

.list .item {
   width:100%;
   height:90%;
}
	
.list .item .title {
    font-size:10px;
}

.list .item .price {
    font-size:8px;
}
.desc {
    font-size: 8px;
}

	.list .item button {
    width: 80% !important;
    padding: 10px;
    margin-top: -60px !important;
    font-size: 10px !important;
    margin-left: -60px !important;
}

.list .item img {
    width: 100% !important;
    height: 100px !important;
}

.list {
    display: grid;
    grid-template-columns: repeat(2, 1fr) !important;
    column-gap: 20px;
    row-gap: 20px;
    margin-top: 50px;
}
    

</style>


<div class="main-section">

<div class="container">

<div class="para">
<p>
  We strive to provide the best possible service for our clients. Please leave a review to let us know how we are doing and to share your experience with others.
</p>
</div>

<form id="review-form" action="index.html" method="post">
  <h2>Write Your Review For This Store</h2>
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
