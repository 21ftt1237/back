@php
    $pageName = 'Bruzone - admin';
@endphp

@include('layouts.admin-header')

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link rel="stylesheet" href="./ecommerce.css"> -->
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    

  <!-- Other meta tags and styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 <!-- <link rel="stylesheet" href="style.css"> -->
  <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<!--<link rel="stylesheet" href="/style.css">
<script src="/app.js"></script>-->
  <title>Bruzone</title>

</head>

<style type="text/css">

        #store-list {
            margin-top: 20px;
        }

        #store-list table {
            width: 100%;
            border-collapse: collapse;
        }

        #store-list th, #store-list td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        #store-list th {
            background-color: #f2f2f2;
        }

        #store-list a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        #store-list a:hover {
            color: #007bff; 
        }

</style>
<body>

<!--TAB store owner: -->
<div id="store-list">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stores as $store)
                <tr>
                    <td>{{ $store->id }}</td>
                    <td><a href="{{ route('store.show', $store->id) }}">{{ $store->name }}</a></td>

                </tr>
            @endforeach
        </tbody>
    </table>


<script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>


<script type="text/javascript">

    function toggleStoreList() {
    const storeList = document.getElementById('store-list');
    if (storeList.style.display === 'block') {
      storeList.style.display = 'none';
    } else {
      storeList.style.display = 'block';
    }
  }
</script>
</body>
</html>
