<?php include 'views/header.php';?>
<?php include 'views/not-auth-navbar.php';?>

<?php
  require_once 'routes/database.php';

  $credentials = [
      'host'      => "localhost",
      'user'      => "bernardpaulo",
      'password'  => "GrpEh4QkCggJTDc",
      'db'        => "virtual-booth"
  ];

  // $credentials = [
  //     'host'      => "localhost",
  //     'user'      => "root",
  //     'password'  => "",
  //     'db'        => "virtual-booth"
  // ];

  $records = get_records("users",$credentials);
 
?>

<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"  rel="stylesheet" />
<link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css"  rel="stylesheet" />

<div class="container flex justify-center mx-auto">
<div class="  my-3 mx-auto shadow-md sm:rounded-lg ">
            <h1 class="text-gray-900 dark:text-white text-xl font-extrabold my-5">SANDOZ CARDIO AND METABOLIC CARE | Virtual Booth Records</h1>
            <h1 class="text-gray-900 dark:text-white text-sm  my-5">
            orem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
            molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
            numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
            optio, eaque rerum! Provident similique accusantium nemo autem.
            </h1>
            <table id="table-records" class="w-full text-sm text-left text-gray-500 dark:text-gray-400 display nowrap my-5"  cellspacing="0" width="100%">

                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-2 py-3">
                            Submission Time
                        </th>
                        <th scope="col" class="px-2 py-3">
                            First Name
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Last Name
                        </th>
                        <th scope="col" class="px-2 py-3">
                            PRC#
                        </th>
                        <th scope="col" class="px-2 py-3">
                            Speciality
                        </th>
                        <th scope="col" class="px-2 py-3">
                            I accept all terms & conditions
                        </th>
      
                    </tr>
                </thead>
                <tbody>
                  <?php 
                    foreach($records  as $record){
                      $record = (object)$record;
       
                      $agreement = $record->terms_and_condition == 1 ? 'Yes' : 'No';
                  ?>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                <?= $record->created_at ?>
                            </th>
                            <td class="px-2 py-4">
                              <?= $record->first_name?>
                            </td>
                            <td class="px-2 py-4">
                              <?= $record->last_name?>
                            </td>
                            <td class="px-2 py-4">
                              <?= $record->prc?>
                            </td>
                            <td class="px-2 py-4">
                              <?= $record->speciality?>
                            </td>
                            <td class="px-2 py-4">
                              <?= $agreement ?>
                            </td>
                        </tr>
                  <?php 
                    }
                  ?>
                </tbody>
            </table>
        </div>


</div>

<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>

<script>
$(document).ready( function() {
    $('#table-records').DataTable( {
        dom: 'Bfrtip',
        buttons: [ {
            extend: 'excelHtml5',
            customize: function( xlsx ) {
                var sheet = xlsx.xl.worksheets['sheet1.xml'];
 
                $('row c[r^="C"]', sheet).attr( 's', '2' );
            }
        } ]
    } );
} );
</script>

<?php include 'views/auth-footer.php';?>