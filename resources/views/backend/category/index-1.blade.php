{{ $category }} <!-- Nama Object Pada Controllers -->

<br/>

<!-- <php 
$row1 = $category[0];
$row2 = $category[1];
$row3 = $category[2];
?> -->

@forelse ($category as $row)
    {{ $row->id }}
    {{ $row->name }}
    {{ $row->description }}
@empty
@endforelse

