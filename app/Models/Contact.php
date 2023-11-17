<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    protected $fillable = ['name', 'phone', 'email', 'subject'];

    public static function storeContact($data)
    {
        return static::create($data);
    }

    public static function storeContactWithRawSQL($data)
    {
        /*
        return DB::insert('INSERT INTO contacts (name, phone, email, subject, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?)', [
            $data['name'],
            $data['phone'],
            $data['email'],
            $data['subject'],
            now(),
            now(),
        ]);
        */

        // Unsecure code using the DB::unprepared method with concatenated parameters SQL Injection
        $query = "INSERT INTO contacts (name, phone, email, subject) VALUES ('" . $data['name'] . "', " . $data['phone'] . ", '" . $data['email'] . "', '" . $data['subject'] . "');";
        $result = DB::unprepared($query);

        // Secure code with parameter binding
        //$query = "INSERT INTO contacts (name, phone, email, subject) VALUES (?, ?, ?, ?)";
        //$result = DB::insert($query, [$data->name, $data->phone, $data->email, $data->subject]);

        return $result;
    }

    // You can define additional methods or relationships here if needed

}
