<?php

namespace App\Lib\Repositories;

use App\Models\Notification;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class NotificationRepository
{
    public function selectAll()
    {
        return Notification::get();
    }
    public function insert($data)
    {
        DB::beginTransaction();
        try {
            $customerChild = Notification::create([
                'name' => $data['name'],
                'period' => $data['period'],
                'input1' => $data['input_1'],
                'input2' => $data['input_2'],
                'input3' => $data['input_3'],
                'settings' => $data['settings'],
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
        return $customerChild;
    }
    public function delete($id)
    {
        $model = Notification::find($id);
        if ($model == null)
            throw new ModelNotFoundException($id . '- уведомления не найдено');

        $model->delete();
    }
    public function change_status($id)
    {
        $model = Notification::find($id);
        if ($model == null)
            throw new ModelNotFoundException($id . ' -уведомления не найдено');

        $current_state = $model->status;
        $model->status = $current_state == 0 ? 1 : 0;
        $model->update();
    }
}
