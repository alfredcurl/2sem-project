<footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                  <a href="#" class="nav-link pe-0 text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link pe-0 text-muted" target="_blank">Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
         </div>
</footer>

 <!--   Core JS Files   -->
 <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="assets/js/plugins/chartjs.min.js"></script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="table/js/bootstrap.bundle.min.js"></script>
  <script src="table/js/dataTables.bootstrap5.js"></script>
 
  <script>
$(document).ready(function() {
    $('.inquiry-row').click(function() {
        var inquiryId = $(this).data('id');
        
        $.ajax({
            url: 'fetch_inquiry.php',
            type: 'post',
            data: { id: inquiryId },
            success: function(response) {
                $('#fullMessage').text(response);
                $('#messageModal').modal('show');
            }
        });
    });

    $('.delete-btn').click(function(e) {
        e.stopPropagation(); // Prevent the row click event from triggering
        var row = $(this).closest('.inquiry-row');
        var inquiryId = row.data('id');

        if (confirm('Are you sure you want to delete this inquiry?')) {
            $.ajax({
                url: 'delete_inquiry.php',
                type: 'post',
                data: { id: inquiryId },
                success: function(response) {
                    if (response === 'success') {
                        row.remove(); // Remove the row from the table
                    } else {
                        alert('Failed to delete the inquiry. Please try again.');
                    }
                }
            });
        }
    });
});
	
new DataTable('#example');
</script>
<!-- Include jQuery, Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
$(document).ready(function() {
    $('.delete-btn').click(function() {
        var button = $(this);
        var id = button.data('id');

        if (confirm('Are you sure you want to delete this image?')) {
            $.ajax({
                url: 'delete_gallery.php',
                type: 'POST',
                data: { id: id },
                success: function(response) {
                    console.log(response); // Log the response for debugging
                    if (response === 'success') {
                        button.closest('tr').remove();
                    } else {
                        alert('Failed to delete the image. Please try again.');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX error:', status, error);
                    alert('AJAX error: ' + status + ' - ' + error);
                }
            });
        }
    });
});
</script>
<script>
  // Function to animate counters from 0 to the actual number
  function animateCounter(id, finalValue) {
    let current = 0;
    const increment = finalValue / 100; // Adjust this value for faster/slower animation

    const interval = setInterval(function() {
      current += increment;
      document.getElementById(id).textContent = Math.floor(current);

      if (current >= finalValue) {
        clearInterval(interval);
        document.getElementById(id).textContent = finalValue;
      }
    }, 20); // Adjust this value for smoother animation
  }

  // Call animateCounter for each counter element with its final value
  document.addEventListener('DOMContentLoaded', function() {
    animateCounter('teachersCounter', 100); // Replace 100 with actual number
    animateCounter('studentsCounter', 1000); // Replace 1000 with actual number
    animateCounter('newStudentsCounter', 62); // Replace 62 with actual number
  });
</script>



  
</body>

</html>