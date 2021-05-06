<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Review extends Model
{
    use HasFactory;

    public $review_name;
    public $review_text;
    public $review_image;
    public $review_stars;
    public $product_id;

    public function getProductReviews($id) {
        $result = DB::table('review')
            ->leftJoin('product', 'review.product_id', '=', 'product.id_product')
            ->where('review.product_id','=',$id)
            ->whereNull('review.deleted_at')
            ->get();
        return $result;
    }

    public function getReview($id) {
        $result = DB::table('review')
            ->where('id_review','=',$id)
            ->whereNull('review.deleted_at')
            ->first();
        return $result;
    }

    public function insertReview() {
        $result = DB::table('review')
            ->insertGetId([
                'review_text' => $this->review_text,
                'review_name' => $this->review_name,
                'review_image' => $this->review_image,
                'stars' => $this->review_stars,
                'product_id' => $this->product_id,
            ]);
        return $result;
    }

    public function editReview($id) {
        $result = DB::table('review')
            ->where('id_review', '=',$id)
            ->update([
                'review_text' => $this->review_text,
                'review_name' => $this->review_name,
                'review_image' => $this->review_image,
                'stars' => $this->review_stars,
                'updated_at' => Carbon::now(),
            ]);
        return $result;
    }

    public function deleteReview($id) {
        $result = DB::table('review')
            ->where('id_review', '=', $id)
            ->update([
                'updated_at' => Carbon::now(),
                'deleted_at' => Carbon::now(),
                'deleted_by' => Auth::user()->id,
            ]);
        return $result;
    }

}
