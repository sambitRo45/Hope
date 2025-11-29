<?php 
 include_once 'navbar.php';
?>
<div class="container my-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card shadow-lg p-4 border-0" style="border-radius: 15px;">
                <h3 class="text-center mb-4 text-success">Slot to serve</h3>
                
                <form action="slot.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()" novalidate>

                    <label class="form-label">Name</label>
                    <input type="text" value="<?php echo $_SESSION['name']?>" name="name" id="name" class="form-control mb-1" readonly>

                    <label class="form-label">Email</label>
                    <input type="email" value="<?php echo $_SESSION['email'] ?>" class="form-control mb-1" id="email" name="email" readonly>
                    
                    <label class="form-label">Choose Your Date</label>
                    <input type="date" name="date" id="date" class="form-control mb-3">

                    <input type="submit" class="btn btn-success" value="Submit" style="width: 50%; padding: 10px 20px; display: block; margin: 0 auto;">
                    
                </form>
            </div>
        </div>
    </div>
</div>

<script>
  const dateInput = document.getElementById('date');
  const today = new Date();

  // Format date as YYYY-MM-DD
  const formatDate = d => d.toISOString().split('T')[0];

  // Minimum date = today
  dateInput.min = formatDate(today);

  // Maximum date = today + 1 month
  const nextMonth = new Date();
  nextMonth.setMonth(today.getMonth() + 1);
  dateInput.max = formatDate(nextMonth);
</script>
<?php 
  include_once 'footer.php';
?>
