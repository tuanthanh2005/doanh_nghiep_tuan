<div>
    <x-section-top title="Hỏi đáp" />

    <style>
        .modern-faq-section {
            background-color: #f8fafc;
            padding: 80px 0;
        }

        .modern-faq-tabs {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            margin-bottom: 50px;
            border-bottom: none;
        }

        .modern-faq-tabs .nav-item .nav-link {
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 50px;
            padding: 12px 25px;
            font-weight: 600;
            color: #64748b;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }

        .modern-faq-tabs .nav-item .nav-link:hover {
            color: #0d6efd;
            border-color: #0d6efd;
            transform: translateY(-2px);
        }

        .modern-faq-tabs .nav-item .nav-link.active {
            background: #0d6efd;
            color: #fff;
            border-color: #0d6efd;
            box-shadow: 0 10px 20px -5px rgba(13, 110, 253, 0.4);
        }

        .modern-faq-card {
            background: #fff;
            border: 1px solid #f1f5f9;
            border-radius: 16px;
            margin-bottom: 20px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
            transition: all 0.3s ease;
        }

        .modern-faq-card:hover {
            border-color: #e2e8f0;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        }

        .modern-faq-header {
            padding: 0;
            background: transparent;
            border-bottom: none;
        }

        .modern-faq-btn {
            width: 100%;
            text-align: left;
            padding: 25px 30px;
            font-size: 1.15rem;
            font-weight: 600;
            color: #1e293b;
            text-decoration: none !important;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: transparent;
            border: none;
        }

        .modern-faq-btn:focus {
            box-shadow: none;
            outline: none;
        }

        .modern-faq-btn[aria-expanded="true"] {
            color: #0d6efd;
        }

        .faq-icon-toggle {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #f1f5f9;
            color: #64748b;
            transition: all 0.3s ease;
        }

        .modern-faq-btn[aria-expanded="true"] .faq-icon-toggle {
            background: #0d6efd;
            color: #fff;
            transform: rotate(45deg);
        }

        .modern-faq-body {
            padding: 0 30px 25px 30px;
            color: #64748b;
            font-size: 1rem;
            line-height: 1.7;
            border-top: 1px solid #f8fafc;
        }
    </style>

    <section id="faq" class="modern-faq-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <span class="badge bg-primary px-3 py-2 rounded-pill mb-3"># TRUNG TÂM HỖ TRỢ</span>
                    <h2 class="display-5 fw-bold text-dark mb-3">Câu hỏi thường gặp</h2>
                    <p class="text-muted" style="font-size:1.1rem">Giải đáp tức thì các thắc mắc chuyên sâu về 6 nền
                        tảng gốc của hệ sinh thái Digital Marketing.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1 wow fadeInUp">
                    <ul class="faq-tab-menus modern-faq-tabs nav nav-tabs" id="faqTab">
                        @foreach($faqs->keys() as $i => $cat)
                            <li class="nav-item">
                                <a class="nav-link {{ $i === 0 ? 'active' : '' }}" data-bs-toggle="tab"
                                    href="#tab-{{ Str::slug($cat) }}">{{ ucfirst($cat) }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="faq-tab-content tab-content" id="faqTabContent">
                        @foreach($faqs as $cat => $items)
                            <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                                id="tab-{{ Str::slug($cat) }}">
                                <div class="faq_tab" id="accordion-{{ Str::slug($cat) }}">
                                    @foreach($items as $j => $faq)
                                        <div class="modern-faq-card">
                                            <div class="modern-faq-header" id="heading-{{ Str::slug($cat) }}-{{ $j }}">
                                                <button class="modern-faq-btn {{ $j !== 0 ? 'collapsed' : '' }}" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-{{ Str::slug($cat) }}-{{ $j }}"
                                                    aria-expanded="{{ $j === 0 ? 'true' : 'false' }}">
                                                    {{ $faq->question }}
                                                    <span class="faq-icon-toggle"><i class="ti ti-plus"></i></span>
                                                </button>
                                            </div>
                                            <div id="collapse-{{ Str::slug($cat) }}-{{ $j }}"
                                                class="collapse {{ $j === 0 ? 'show' : '' }}"
                                                data-bs-parent="#accordion-{{ Str::slug($cat) }}">
                                                <div class="modern-faq-body">
                                                    {{ $faq->answer }}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="contact" class="contact_area section-padding">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="section-title-white">Liên hệ với chúng tôi</h2>
            </div>
            <div class="row">
                <div class="offset-lg-1 col-lg-10 text-center wow fadeInUp">
                    @livewire('forms.contact-form')
                </div>
            </div>
        </div>
    </div>

    @include('components.partner-logos')
</div>