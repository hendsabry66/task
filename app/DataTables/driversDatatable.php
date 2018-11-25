<?php

namespace App\DataTables;

use App\Bus;
use App\Driver;
use Yajra\DataTables\Services\DataTable;

class driversDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)
            ->editColumn('bus_id',function($query){
                $bus = Bus::find($query->bus_id);
                return $bus->number ;

            })
            ->addColumn('action', 'driversdatatable.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Driver $model)
    {
        return $model->newQuery()->select('id', 'name', 'phone','bus_id','created_at');
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
            ->parameters([
                'dom'     => 'Blfrtip',
                'order'   => [[0, 'desc']],
                "lengthMenu" => [[10, 25, 50, -1], [10, 25, 50, "All"]],
                'buttons' => [
                    ['extend' =>'create' , 'text' =>  '<i class="fa fa-plus"></i>create' , 'className' =>'dt-button buttons-copy buttons-html5 btn btn-default legitRipple'],
                    ['extend' => 'export', 'text' => '<i class="fa fa-download"></i>export' , 'className' =>'dt-button buttons-copy buttons-html5 btn btn-default legitRipple'],
                    ['extend' => 'print' , 'text' => '<i class="fa fa-print"></i>print' , 'className' =>'dt-button buttons-copy buttons-html5 btn btn-default legitRipple'],
                    ['extend' =>  'colvis' , 'className' => 'dt-button buttons-collection buttons-colvis btn bg-blue btn-icon legitRipple' , 'text' => '<span><i class="icon-three-bars"></i> <span class="caret"></span></span>']

                ],
                'responsive'=>true,

            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id' => ['name' => 'id' ,'data' => 'id' , 'title' => 'id'],
            'name' => ['name' => 'name' ,'data' => 'name' ,'title' => 'name'],
            'busid' => ['name' => 'bus' ,'data' => 'bus_id' ,'title' => 'busid'],
            'created_at' => ['name' => 'created_at' ,'data' => 'created_at' ,'title' => 'created_at'],
            'action' => [ 'exportable' => false, 'printable'  => false, 'searchable' => false, 'orderable'  => false, 'title' => 'action']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'drivers_' . date('YmdHis');
    }
}
