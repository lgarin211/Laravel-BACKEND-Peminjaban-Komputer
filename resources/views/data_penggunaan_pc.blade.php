tas
    <div class="row" id="ajax">
    </div>

<script>
    setInterval(() => {
        fetch("{{url('/a/ajax?ajax=as')}}", {
            method: 'GET',
          }).then((response) => response.text())
          .then((data) => {
            document.getElementById('ajax').innerHTML = data;
          });
    }, 1000);

</script>
