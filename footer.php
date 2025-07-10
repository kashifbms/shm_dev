<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

	<script type="text/javascript" src="js/scrolloverflow.js"></script>

	<!-- <script type="text/javascript" src="js/jquery.fullPage.js"></script> -->

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

	<!-- <script type="text/javascript" src="js/script.js"></script> -->

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const menuLinks = document.querySelectorAll('a[href^="#"]');

    menuLinks.forEach(function (link) {
      link.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
          const yOffset = -83; // Negative offset for fixed menu
          const y = targetElement.getBoundingClientRect().top + window.pageYOffset + yOffset;

          window.scrollTo({
            top: y,
            behavior: 'smooth'
          });
        }
      });
    });
  });
</script>

