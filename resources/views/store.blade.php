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

        .section2, .container, .items {
            margin: 10px;
            margin-left: 45px;
        }

        .section2 {
            width: 1080px;
        }

        
        .section2 .container {
/*             display: flex; */
            width: 100%;
            height: max-content;
            flex-wrap: wrap;
            justify-content: center;
            margin: 10px auto;
        }

        .section2 .container .items {
            margin: 10px;
            width: 400px;
            height: 600px;
            background-color: white;
            border: 2.5px solid black;
            border-radius: 12px;
        }

        .section2 .container .items .name {
            text-align: center;
            height: 25px;
    padding-top: 4px;
    color: black;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 15px;
    font-weight: 600;
        }

        .section2 .container .items .price {
            float: left;
    display: block;
    width: 100%;
    color: rgb(255, 0, 0);
    font-weight: 650;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 15px;
    font-family: 'Barlow Semi Condensed', sans-serif;
}
        }

        .section2 .container .items .info {
            padding-left: 10px;
            color: black;
                padding-left: 40px;
    color: black;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 250px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 15px;
    margin-top: 15px;
}
        }

/*         .section2 .container .items .img img {
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
        } */

        .section2 .container .items .img img {
    width: 200px;
    height: 200px;
    margin: 0;
    padding: 0;
    border-radius: 12px;
    transition-duration: 0.8s;
    transform: scale(1.2); /* Add this line to scale images by default */
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
        margin: 0;
        margin-bottom: 15px;
/*         display: flex; */
        justify-content: center;
        align-items: center;
        margin-top: 15px;
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

        .list{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    column-gap: 20px;
    row-gap: 20px;
    margin-top: 50px;
}
.list .items{
    text-align: center;
    background-color: white;
  border: 2.5px solid black;
  border-radius: 12px;
    padding: 20px;
/*    box-shadow: 0 50px 50px #757676;*/
    letter-spacing: 1px;
}
.list .items img{
    width: 90%;
    height: 250px;
    object-fit: cover;
}
.list .items .title{
    font-weight: 600;
}
.list .items .price{
    margin: 10px;
}
.list .items button{
    background-color: #1C1F25;
    color: #fff;
    width: 100%;
    padding: 10px;
}

        .info{
            height: 250px;
        }
    </style>
</head>
<body>

  <section>
    <div class="section">
      <div class="section1">
        <div class="section2">
            <div class="container">
                <div class="containerPage">
                    <div class="list">
                        @foreach ($products as $product)
                            <div class="items">
                                <div class="img">
                                    <img src="image/{{ $product->image_link }}" alt="{{ $product->name }}">
                                </div>
                                <div class="name">{{ $product->name }}</div>
                                <div class="price">$ {{ $product->price }}</div>
                                <div class="info">{{ $product->description }}</div>
                                <div class="actions">
                                    <button onclick="addToCard(${key})">Add To Cart</button>
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
