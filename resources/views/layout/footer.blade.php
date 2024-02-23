<footer class="d-grid justify-content-center">
    <h5 id="currentDate"></h5>
</footer>

<script>
    var currentDate = new Date();
    var formattedDate = currentDate.toLocaleDateString('en-US', { month: 'long', day: 'numeric', year: 'numeric' });
    document.getElementById('currentDate').innerText = formattedDate;
</script>
