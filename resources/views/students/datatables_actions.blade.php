{!! Form::open(['route' => ['students.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('students.show', $id) }}" class='btn btn-default btn-xs'>
        <i class="far fa-eye"></i>
    </a>
    <a href="{{ route('students.edit', $id) }}" class='btn btn-default btn-xs'>
        <i class="fas fa-edit"></i>
    </a>
    {!! Form::button('<i class="fas fa-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Are you sure?')"
    ]) !!}
</div>
{!! Form::close() !!}
