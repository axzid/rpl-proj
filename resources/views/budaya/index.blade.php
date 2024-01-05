<!-- resources/views/budaya/index.blade.php -->

    <h1>Budaya List</h1>

    @foreach($budayas as $budaya)
        <div>
            <h3>{{ $budaya->name }}</h3>
            <p>{{ $budaya->description }}</p>
            <a href="{{ route('budaya.show', $budaya->id) }}">View Details</a>
        </div>
        <hr>
    @endforeach
