<?php

namespace App\DataTables;

use App\Models\Classroom;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Datatables;
use App\Services\DataTablesDefaults;

class ClassroomDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $classrooms = Classroom::all();

        return DataTables::of($classrooms)
            ->editColumn('availability', function ($classroom) {
                if($classroom->availability == true){
                    return "Sim";
                }else{
                    return "Não";
                }
            })
            ->addColumn('action', 'classrooms.datatables_actions')
            ->rawColumns(['action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Classroom $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Classroom $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false, 'title' => 'Ações'])
            ->parameters(DataTablesDefaults::getParameters());
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id' => ['render' => '(data)? ((data.length>180)? data.substr(0,180)+"..." : data) : "-"', 'title' => 'Código'],
            'capacity' => ['render' => '(data)? ((data.length>180)? data.substr(0,180)+"..." : data) : "-"', 'title' => 'Capacidade'],
            'availability' => ['render' => '(data)? ((data.length>180)? data.substr(0,180)+"..." : data) : "-"', 'title' => 'Está disponível?'],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'classrooms_datatable_' . time();
    }
}
