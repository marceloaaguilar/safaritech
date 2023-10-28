<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safari Tech</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


    <!--- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Style.CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Herr+Von+Muellerhoff&family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">

</head>
<body>

    <a class="whatsapp-link" target="_blank" href="">
        <i class="bi bi-whatsapp"></i>
    </a>

    <section class="inicial-screen" id="inicial-screen">
        <nav class="navbar navbar-expand-lg navbar-dark" >
            <div class="container-fluid" id="navbarContainer">
                <div id="navbarSafariTech">
                    <a class="navbar-brand">
                        <img src="images/logo-safari-04.png" class="img-fluid" id="logo-safari" alt="Logo Safari Tech">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto" id="infosNavBar">
                        <a class="nav-link active" aria-current="page" href="#inicial-screen">INÍCIO</a>
                        <a class="nav-link" href="#our-services">NOSSOS SERVIÇOS</a>
                        <a class="nav-link" href="#our-clients">CLIENTES</a>
                        <a class="nav-link" href="#contact">CONTATO</a>
                    </div>
                </div>
            </div>
        </nav>

        <div id="text-initial">
            <h3 id="title">Transforme sua empresa <br> com soluções tecnológicas <br> personalizadas</h3>
            <button type="button" class="btn"id="btn-Initial-Screen"><a href="#contact">Saiba Mais</a></button>
        </div>
    </section>

    <section class="our-services" id="our-services">
        <div class="container">
            <h3 id="title2" >Nossos Serviços</h3>
            <div class="row rowCards">
                <div class="col">
                    <div class="card h-100" id="cardSafari">
                        <img src="images/icons/celular.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Desenvolvimento de Aplicativos Móveis</h5>
                            <p class="card-text">Criação de aplicativos móveis sob medida para empresas que desejam melhorar a eficiência, atender às necessidades específicas do cliente ou aprimorar a experiência do usuário</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" id="cardSafari">
                        <img src="images/icons/engrenagem.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Desenvolvimento de Software</h5>
                            <p class="card-text">Desenvolvimento de software personalizado que atenda aos requisitos únicos de negócios de cada cliente, melhorando processos internos, automação e tomada de decisões</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" id="cardSafari">
                        <img src="images/icons/lampada-incandescente.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Consultoria em Tecnologia</h5>
                            <p class="card-text">Oferecimento de consultoria especializada para ajudar empresas a identificar oportunidades de otimização tecnológica, implementar estratégias eficientes e escolher as melhores soluções tecnológicas.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row rowCards">
                    <div class="col">
                        <div class="card h-100" id="cardSafari">
                            <img src="images/icons/quebra-cabeca.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Integração de Sistemas</h5>
                                <p class="card-text">Integração de sistemas de software para permitir a comunicação perfeita entre diferentes aplicativos e plataformas utilizados em uma empresa</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100" id="cardSafari">
                            <img src="images/icons/carrinho-carrinho.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Soluções de E-Commerce</h5>
                                <p class="card-text">Desenvolvimento de plataformas de comércio eletrônico personalizadas que atendem às necessidades específicas de negócios, incluindo recursos avançados de gerenciamento de estoque, pagamento e segurança</p>
                            </div>
                        </div>
                    </div>
                <div class="col">
                    <div class="card h-100" id="cardSafari">
                        <img src="images/icons/engrenagem.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Serviços de Manutenção e Suporte Técnico</h5>
                            <p class="card-text">Oferecimento de serviços contínuos de manutenção e suporte técnico para garantir o desempenho e a segurança dos aplicativos desenvolvidos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-clients" id="our-clients">
        <div class="container">
            <h3 id="title3" >Nossos Clientes</h3>
            <p id="clients-description" >Na Safari Tech, nosso sucesso é medido pelo <b>sucesso de nossos clientes.</b> Trabalhamos com empresas de todos os setores, adaptando soluções tecnológicas personalizadas para <b>suas necessidades.</b> Explore nossos estudos de caso e depoimentos para ver como colaboramos com nossos parceiros comerciais. Junte-se a nós e seja parte de nossa lista crescente de <b>satisfeitos. </b> </p>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container">
            <h3 id="title2">Entre em Contato Conosco</h3>
            <div class="row">
                <div class="col">
                    <ul>
                        <li> <i class="bi bi-geo-alt-fill"></i> Endereço</li>
                        <li> <i class="bi bi-telephone-fill"></i> Telefone</li>
                        <li> <i class="bi bi-envelope-fill"></i> E-mail</li>
                    </ul>
                </div>

                <div class="col">
                    <form id="form-contact">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" aria-describedby="nome">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="telefone">
                        </div>

                        <text class="mb-3">
                            <label for="mensagem" class="form-label">Mensagem</label>
                            <textarea type="text" class="form-control" id="mensagem">
                        </textarea>
                    
                        <button type="submit" class="btn" id="btn-form" >Enviar</button>
                    </form>
                </div>
            </div>
        </div>


    </section>

    <footer>
        <div class="container">
            <div class="row" id="rowFooter">
                <div class="col">
                    <a href="#inicial-screen"><img src="images/logo-safari-04.png"  id="logo-safari" class="img-fluid" alt="Logo Safari" srcset=""></a>                
                </div>
                <div class="col">
                    <ul id="places">
                        <li><a href="#inicial-screen">Início</a></li>
                        <li><a href="#our-services">Nossos Serviços</a></li>
                        <li><a href="#our-clients">Nossos Clientes</a></li>
                        <li><a href="#contact">Entre em Contato</a></li>
                    </ul>
                </div>
                <div class="col" id="socialmedia">
                    <p>Nossas Redes</p>
                    <div id="socialIcons">
                        <a href=""><i id="icon" class="bi bi-instagram"></i></a>
                        <a href=""><i id="icon" class="bi bi-facebook"></i></a>
                        <a href=""><i id="icon" class="bi bi-youtube"></i></a>
                        <a href=""><i id="icon" class="bi bi-whatsapp"></i></a>
                        
                    </div>
                </div>
            </div>
            
            
        </div>
    </footer>
    <!--- Bootstrap ---->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>