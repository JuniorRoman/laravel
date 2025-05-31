<div>
  <div class="p-4 bg-gray-100 rounded shadow">
      <h2 class="text-lg font-bold mb-2">Wybierz paczkomat</h2>
      <button
          id="open-widget"
          class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700"
      >
          Otwórz widget
      </button>

      <div id="selected-point" class="mt-4 text-sm text-gray-800">
          @if ($selectedPoint)
              <strong>{{ $selectedPoint['name'] }}</strong><br>
              {{ $selectedPoint['address']['line1'] }},
              {{ $selectedPoint['address']['city'] }}
          @endif
      </div>
  </div>

  {{-- SDK --}}
  <script src="https://geowidget.easypack24.net/js/sdk-for-javascript.js"></script>
  <script>
      document.addEventListener('DOMContentLoaded', function () {
          const widget = new window.InPost.Widget({
              config: {
                  type: 'parcel_locker',
              },
              onPick: function (point) {
                  @this.call('setSelectedPoint', point); // Livewire → PHP
              }
          });

          document.getElementById('open-widget').addEventListener('click', function () {
              widget.open();
          });
      });
  </script>
</div>
