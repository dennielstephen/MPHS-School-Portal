    <!-- Core Scripts - Include with every page -->
    <script src="../assets/plugins/jquery-1.10.2.js"></script>
    <script src="../assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="../assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../assets/plugins/pace/pace.js"></script>
    <script src="../assets/scripts/siminta.js"></script>




    
    <!-- Page-Level Plugin Scripts-->
	<script type="text/javascript" src="../assets/datatables.min.js"></script>
    <script src="../assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../assets/plugins/dataTables/dataTables.bootstrap.js"></script>
	
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
    <script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
    $('#example').DataTable();

    $('#example')
    .removeClass( 'display' )
    .addClass('table table-bordered');
    });
    </script>
	<style>
	/* Box styles */
	.myBox {
		border: none;
		padding: 5px;
		font: 24px/36px sans-serif;
		width: 200px;
		height: 200px;
		overflow: scroll;
	}

	/* Scrollbar styles */
	::-webkit-scrollbar {
		width: 12px;
		height: 12px;
	}

	::-webkit-scrollbar-track {
		box-shadow: inset 0 0 10px olivedrab;
		border-radius: 10px;
	}

	::-webkit-scrollbar-thumb {
		border-radius: 10px;
		background: gray; 
		box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
	}

	::-webkit-scrollbar-thumb:hover {
		background: #1c1c1c;
	}
	</style>