<?php

namespace App\DataTables;

use App\Models\Equipment;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use App\Services\DataTablesDefaults;
use DB;
use Yajra\DataTables\Datatables;

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
        $equipments = Equipment::where('id', '>', 0)->select(
            'equipments.*',
            DB::raw("DATE_FORMAT(equipments.buy_date,'%d/%m/%Y') as readable_buy_date"),
            DB::raw("FORMAT(equipments.price, 2, 'de_DE') as readable_price"),
        );

        return DataTables::of($equipments)
            ->filterColumn('readable_buy_date', function($query, $keyword){
                $query->whereRaw("
                    date_format(equipments.buy_date,'%d/%m/%Y')
                like ?", ["%{$keyword}%"]);
            })
            ->filterColumn('readable_price', function($query, $keyword){
                $query->whereRaw("
                    FORMAT(equipments.price, 2, 'de_DE')
                like ?", ["%{$keyword}%"]);
            })
            ->addColumn('action', 'equipment.datatables_actions')
            ->rawColumns(['action']);
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
            'readable_buy_date' => ['render' => '(data)? ((data.length>180)? data.substr(0,180)+"..." : data) : "-"', 'title' => 'Data da compra'],
            'readable_price' => ['render' => '(data)? ((data.length>180)? data.substr(0,180)+"..." : data) : "-"', 'title' => 'Preço'],
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
