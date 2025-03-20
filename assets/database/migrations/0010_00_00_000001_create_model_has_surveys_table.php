<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Hanafalah\ModuleSurvey\Models\ModelHasSurvey;

return new class extends Migration
{
    use Hanafalah\LaravelSupport\Concerns\NowYouSeeMe;

    private $__table;

    public function __construct()
    {
        $this->__table = app(config('database.models.ModelHasSurvey', ModelHasSurvey::class));
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        $table_name = $this->__table->getTable();
        if (!$this->isTableExists()) {
            Schema::create($table_name, function (Blueprint $table) {
                $master_survey = app(config('database.models.MasterSurvey'));

                $table->string('model_type', 50)->nullable(false);
                $table->string('model_id', 36)->nullable(false);
                $table->foreignIdFor($master_survey::class)->nullable(false)
                    ->cascadeOnUpdate()->cascadeOnDelete();

                $table->index(['model_type', 'model_id'], 'model_mhs');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists($this->__table->getTable());
    }
};
