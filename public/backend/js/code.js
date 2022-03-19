 $(function(){
    $(document).on('click','#delete',function(e){
      e.preventDefault();
      var link = $(this).attr("href");
            Swal.fire({
            title: 'Are you sure?',
            text: "Delete this Data ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = link
              Swal.fire(
                'Deleted!',
                'Your Data has been deleted.',
                'success'
              )
            }
          })
    });
  });



  //Confirm
   $(function(){
    $(document).on('click','#confirm',function(e){
      e.preventDefault();
      var link = $(this).attr("href");
            Swal.fire({
            title: 'Are you sure to Confirm?',
            text: "Once Confirm, You will not be able to pending again",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, confirm Order!'
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = link
              Swal.fire(
                'Confirm!',
                'Confirm Changes.',
                'success'
              )
            }
          })
    });
  });

  ///Processing

     $(function(){
    $(document).on('click','#processing',function(e){
      e.preventDefault();
      var link = $(this).attr("href");
            Swal.fire({
            title: 'Are you sure to Process Order?',
            text: "Once Processed, You will not be able to confirm again",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Process Order!'
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = link
              Swal.fire(
                'Processing!',
                'Processing Changes.',
                'success'
              )
            }
          })
    });
  });

  //Picked 

     $(function(){
    $(document).on('click','#picked',function(e){
      e.preventDefault();
      var link = $(this).attr("href");
            Swal.fire({
            title: 'Are you sure to Pick Order?',
            text: "Once Picked, You will not be able to process again",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Pick Order!'
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = link
              Swal.fire(
                'Picking!',
                'Picking Changes.',
                'success'
              )
            }
          })
    });
  });

  //Shipped

    $(function(){
    $(document).on('click','#shipped',function(e){
      e.preventDefault();
      var link = $(this).attr("href");
            Swal.fire({
            title: 'Are you sure to Ship Order?',
            text: "Once Shipped, You will not be able to pick again",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Ship Order!'
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = link
              Swal.fire(
                'Shipping!',
                'Shipping Changes.',
                'success'
              )
            }
          })
    });
  });

  //Delivered
    $(function(){
    $(document).on('click','#delivered',function(e){
      e.preventDefault();
      var link = $(this).attr("href");
            Swal.fire({
            title: 'Are you sure to Deliver Order?',
            text: "Once Delivered, You will not be able to ship again",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Deliver Order!'
          }).then((result) => {
            if (result.isConfirmed) {
              window.location.href = link
              Swal.fire(
                'Deliver!',
                'Deliver Changes.',
                'success'
              )
            }
          })
    });
  });