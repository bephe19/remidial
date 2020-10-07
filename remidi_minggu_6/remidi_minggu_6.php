<?php
$barang = [
    ["Tas Carir", "Consina", 72500, "tasconsina.jpg" ],
    ["Tas Carir", "Arei", 76500, "tasrei.jpg"],
    ["Tas Carir", "Eiger", 86500, "crreiger.jpg"],
    ["Tenda Camping", "Consina", 120000, "tendaconsina.jpg"],
    ["Tenda Camping", "Eiger", 90000, "tendaeiger.jpg"],
    ["Tenda Camping", "Arei", 130000, "tendarei.jpg"],
    ["Sepatu Outdoor", "Consina", 52500, "spatucon.jpg"],
    ["Sepatu Outdoor", "Eiger", 46500, "sptger.jpg"],
    ["Sepatu Outdoor", "Arei", 35500, "spaturei.png"]
];

// Membuat Pilihan
$temp_arr=[];

foreach ($barang as $key) {
//    var_dump($key[0]);
   $temp_arr[]=$key[0];
}
$pilihan=array_unique($temp_arr);
// var_dump($pilihan);

// End pilihan

// Blok filter
$show_barang=[];
if(isset($_POST['filter']))
{
    // echo "tes";
    // var_dump($_POST['filter']);
    $filter=$_POST['filter'];
    if($filter == "")
    {
        $show_barang=$barang;
    }else{
        foreach($barang as $key)
        {
            if($key[0] == $filter){
                $show_barang[]=[$key[0],$key[1],$key[2],$key[3]];
            }
        }
    }
}else{
    $show_barang=$barang;
}
// var_dump($tampilkan_merk);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <div class="d-flex mx-auto">
        <h2 class="d-flex mx-auto bg-warning">Data Penjualan Perlengkapan Outdoor</h2>
    </div>
    <div class="d-flex">
    <form class="d-flex mx-auto" action="remidi_minggu_6.php" method="post">
        <select name="filter">
            <option value="">
                Show All
            </option>
            <?php foreach ($pilihan as $key): ?>
                <option value="<?php echo $key; ?>"><?php echo $key; ?></option>
            <?php endforeach; ?>      
        </select>
        <input type="submit" value="filter">
            </div>
    </form>


   

    <table class="table">
  <thead class="bg-info">
    <tr>
      <th scope="col">Picture</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Nama Brand</th>
      <th scope="col">Retail Barang</th>
    </tr>
  </thead>
  <?php $grand_total=0; ?>
  <?php foreach ($show_barang as $key => $value): ?>
  <tbody class="bg-warning">
    <tr>
      <td><b><img src="images/<?php echo $value[3]; ?>" alt="" width="200px"></b></td> 
      <td><?php echo $value[0]; ?></td>
      <td><?php echo $value[1]; ?></td>
      <td><?php echo $value[2]; ?></td>
    </tr>
</tbody>
<?php $grand_total+=$value[2]; ?>
<?php endforeach; ?>
<thead class="bg-info">
    <tr>
      <th scope="col">Jumlah Total</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"><?php echo $grand_total; ?></th>
    </tr>
  </thead>

</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>