</div>
</div>
  </body>

 <script src="{{ asset('public/user') }}/js/jquery-1.12.4.min.js" crossorigin="anonymous"></script>
 
    <script src="{{ asset('public/user') }}/js/bootstrap.min.js"></script>
  <script src="{{ asset('public/user') }}/js/main.js"></script>
   @if(session('success'))
    <script>
        setTimeout(function() {
            var successMessage = document.getElementById('success-message');
            if (successMessage) {
                successMessage.style.display = 'none';
            }
        }, 5000);  
    </script>
@endif
</body>
</html>