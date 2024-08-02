@php
    $user = "Priyanshu Dave";
    $friends = ['Pd','meet','yash','hmza','kamo'];
@endphp

<script>
    var data = @json($friends);
    
    data.forEach(function(entry){
        console.log(entry);
    });
</script>