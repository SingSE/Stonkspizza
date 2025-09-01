    <?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    return new class extends Migration
    {
        /**
         * Run the migrations.
         */
        public function up(): void
        {
            Schema::create('ingredienten', function (Blueprint $table) {
                $table->id();
                $table->string('name')->nullable(false);
                $table->double('price', 4, 2)->nullable(false);
                $table->foreignId('eenheid_id')->nullable(false)->references('id')->on('eenheid')->cascadeOnDelete();
            });
        }

        /**
         * Reverse the migrations.
         */
        public function down(): void
        {
            Schema::dropIfExists('ingredienten');
        }
    };
