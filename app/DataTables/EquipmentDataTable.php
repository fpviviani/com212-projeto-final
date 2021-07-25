<?php

namespace App\DataTables;

use App\Models\Equipment;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use App\Services\DataTablesDefaults;

class EquipmentDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'equipment.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Equipment $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Equipment $model)
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
            'buy_date' => ['render' => '(data)? ((data.length>180)? data.substr(0,180)+"..." : data) : "-"', 'title' => 'Data da compra'],
            'price' => ['render' => '(data)? ((data.length>180)? data.substr(0,180)+"..." : data) : "-"', 'title' => 'Preço'],
            'condition' => ['render' => '(data)? ((data.length>180)? data.substr(0,180)+"..." : data) : "-"', 'title' => 'Condição'],
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'equipment_datatable_' . time();
    }
}
