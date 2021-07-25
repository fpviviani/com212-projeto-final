<?php

namespace App\DataTables;

use App\Models\Student;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use App\Services\DataTablesDefaults;

class StudentDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'students.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Student $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Student $model)
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
            'name' => ['render' => '(data)? ((data.length>180)? data.substr(0,180)+"..." : data) : "-"', 'title' => 'Nome'],
            'sex' => ['render' => '(data)? ((data.length>180)? data.substr(0,180)+"..." : data) : "-"', 'title' => 'Sexo'],
            'registration_number' => ['render' => '(data)? ((data.length>180)? data.substr(0,180)+"..." : data) : "-"', 'title' => 'Número mat.'],
            'birthdate' => ['render' => '(data)? ((data.length>180)? data.substr(0,180)+"..." : data) : "-"', 'title' => 'Data nasc.'],
            'responsible_name' => ['render' => '(data)? ((data.length>180)? data.substr(0,180)+"..." : data) : "-"', 'title' => 'Nome resp.'],
            'responsible_phone_number' => ['render' => '(data)? ((data.length>180)? data.substr(0,180)+"..." : data) : "-"', 'title' => 'Telefone resp.'],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'students_datatable_' . time();
    }
}
