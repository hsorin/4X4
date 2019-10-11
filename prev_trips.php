<?php include 'db.php'; ?>

<div class="border border-warning">
<table class="table table-sm table-responsive-sm table-striped table-bordered table-hover">
  <thead class="text-right thead-dark">
    <tr class="">
      <th></th>
      <th class="text-warning">הטיול</th>
      <th class="text-warning">תאריך הטיול</th>
      <th class="text-warning">נקודות ציון</th>
    </tr>
  </thead>
  <tbody class="text-right bg-white">

<?php
  $query = "SELECT * FROM trips ORDER BY trip_date DESC";
  $result = mysqli_query($connection, $query);
  if (!$result = mysqli_query($connection, $query)) {
    echo "Error: " . "<br>" . mysqli_error($connection);
  }

  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $trip_name = $row['trip_name'];
    $trip_date = new DateTime($row['trip_date']);
    $trip_points = $row['trip_points'];
    $trip_photo = $row['trip_photo'];

    echo "<tr>";
    echo "<td><button type='button'><a href='$trip_photo'><span class='material-icons'>camera_enhance</span></a></button></td>";
    echo "<td>{$trip_name}</td>";
    echo "<td>{$trip_date->format('d/m/Y')}</td>";
    echo "<td>{$trip_points}</td>";
    echo "</tr>";
  }
?>
  </tbody>
</table>
</div>
