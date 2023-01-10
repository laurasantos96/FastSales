<?php
namespace App\Jobs;

use Illuminate\Bus\Queueable;
use App\Models\Image;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class GoogleVisionLabelImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $image_id;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($image_id)
    {
        $this->image_id = $image_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        /* $i = Image::find($this->image_id);
        if(!$i){
            return;
        }
        $image = file_get_contents(storage_path('/app/public'.$i->path));
        putenv('GOOGLE_APPLICATION_CREDENTIALS='.base_path('google_credentials.json'));
        $imageAnnotator = new ImageAnnotatorClient();
        $response = $imageAnnotator->labelDetection($image);
        $imageAnnotator->close();
        $labels = $response->getLabelAnnotations();
        if($labels){
            $result = [];
            foreach ($labels as $label) {
                $result[] = $label->getDescription();
            }
        }
        $i->labels = $result;
        $i->save();
        dd(gettype(Image::find($i->id)->labels)); */
        $i = Image::find($this->image_id);
        if (!$i) {
            return;
        }
        $image = file_get_contents(storage_path('/app/public/' . $i->path));
        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google_credentials.json'));

        $imageAnnotator = new ImageAnnotatorClient();
        $response = $imageAnnotator->labelDetection($image);
        $imageAnnotator->close();
        $labels = $response->getLabelAnnotations();

        if ($labels) {
            $result = [];
            foreach ($labels as $label) {
                $result[] = $label->getDescription();
            }
        }
        $i->labels = $result;
        $i->save();
        (gettype(Image::find($i->id)->labels));
}
}