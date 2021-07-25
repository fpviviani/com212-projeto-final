{!! Form::open(['route' => ['equipment.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('equipment.show', $id) }}" class='btn btn-default btn-xs'>
        <i class="far fa-eye"></i>
    </a>
    <a href="{{ route('equipment.edit', $id) }}" class='btn btn-default btn-xs'>
        <i class="fas fa-edit"></i>
    </a>
    {!! Form::button('<i class="fas fa-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Tem certeza?')"
    ]) !!}
</div>
{!! Form::close() !!}
