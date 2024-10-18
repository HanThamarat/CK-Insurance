                                    {{-- ใช้ unique() เพื่อกรองข้อมูล id ที่ซ้ำกัน --}}
                                    @foreach ($cars->unique('Ratetype_id') as $car)
                                        @if ($car->Ratetype_id)
                                            {{-- ตรวจสอบให้แน่ใจว่า Ratetype_id ไม่เป็น null --}}
                                            <option value="{{ $car->Ratetype_id }}" id="car_group"
                                                class="text-red-500">
                                                @switch($car->Ratetype_id)
                                                    @case('C01')
                                                        รถเก๋ง
                                                    @break

                                                    @case('C02')
                                                        กระบะตอนเดียว
                                                    @break

                                                    @case('C03')
                                                        กระบะแค็บ
                                                    @break

                                                    @case('C04')
                                                        กระบะ 4 ประตู
                                                    @break

                                                    @case('C05')
                                                        รถตู้
                                                    @break

                                                    @case('C06')
                                                        รถใหญ่
                                                    @break
                                                @endswitch
                                            </option>
                                        @endif
                                    @endforeach

                                    {{-- ลูปรถมอเตอร์ไซค์ --}}
                                    @foreach ($motoGroups->unique('Ratetype_id') as $motogroup)
                                        @if ($motogroup->Ratetype_id)
                                            <option value="{{ $motogroup->Ratetype_id }}" id="moto_group"
                                                class="text-red-500">
                                                @switch($motogroup->Ratetype_id)
                                                    @case('M01')
                                                        เกียร์ธรรมดา
                                                    @break

                                                    @case('M02')
                                                        เกียร์ออโต้
                                                    @break

                                                    @case('M03')
                                                        BigBike
                                                    @break
                                                @endswitch
                                            </option>
                                        @endif
                                    @endforeach

















                                                                <!-- ประเภทรถ 1 -->
                            <div class="relative mb-1">
                                <label for="Vehicle_Type"
                                    class="block text-red-500 mb-2 transition-all duration-300 transform
                                {{ $errors->has('Vehicle_Type') ? 'text-red-500' : 'text-red-500' }}
                                {{ old('Vehicle_Type') ? 'translate-y-[-1.25rem] scale-75' : 'translate-y-0 scale-100' }}
                                absolute left-2 top-2 bg-white px-2 py-1 rounded-md text-sm">
                                    ประเภทรถ 1
                                </label>

                                <select
                                    class="form-select block w-full border border-red-500 rounded-md shadow-sm
                                focus:ring-red-500 focus:border-red-500 sm:text-sm h-11 py-1 px-2 transition duration-200 ease-in-out text-red-500"
                                    id="Vehicle_Type" name="Vehicle_Type" required
                                    onchange="this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value) &&
                                          this.previousElementSibling.classList.toggle('translate-y-[-1.25rem]', this.value);
                                          this.classList.add('text-red-500');
                                          this.style.color = this.value ? 'red' : '';"
                                    onblur="this.classList.remove('text-red-500');">
                                    <option value="" class="text-red-500">ประเภทรถ 1</option>

                                    {{-- ใช้ unique() เพื่อกรองข้อมูล id ที่ซ้ำกัน --}}
                                    @foreach ($cars->unique('Ratetype_id') as $car)
                                        @if ($car->Ratetype_id)
                                            {{-- ตรวจสอบให้แน่ใจว่า Ratetype_id ไม่เป็น null --}}
                                            <option value="{{ $car->Ratetype_id }}" id="car_group"
                                                class="text-red-500">
                                                @switch($car->Ratetype_id)
                                                    @case('C01')
                                                        รถเก๋ง
                                                    @break

                                                    @case('C02')
                                                        กระบะตอนเดียว
                                                    @break

                                                    @case('C03')
                                                        กระบะแค็บ
                                                    @break

                                                    @case('C04')
                                                        กระบะ 4 ประตู
                                                    @break

                                                    @case('C05')
                                                        รถตู้
                                                    @break

                                                    @case('C06')
                                                        รถใหญ่
                                                    @break
                                                @endswitch
                                            </option>
                                        @endif
                                    @endforeach

                                    {{-- ลูปรถมอเตอร์ไซค์ --}}
                                    @foreach ($motoGroups->unique('Ratetype_id') as $motogroup)
                                        @if ($motogroup->Ratetype_id)
                                            <option value="{{ $motogroup->Ratetype_id }}" id="moto_group"
                                                class="text-red-500">
                                                @switch($motogroup->Ratetype_id)
                                                    @case('M01')
                                                        เกียร์ธรรมดา
                                                    @break

                                                    @case('M02')
                                                        เกียร์ออโต้
                                                    @break

                                                    @case('M03')
                                                        BigBike
                                                    @break
                                                @endswitch
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
