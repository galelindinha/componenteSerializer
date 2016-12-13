<html>
	<head>
		<title>Componente Serializer</title>
	</head>
	<body>
		<h1>Objeto convertido usando o componente Serializer</h1>
		<?php 
			use Symfony\Component\Serializer\Serializer;
      use Symfony\Component\Serializer\Encoder\XmlEncoder;
      use Symfony\Component\Serializer\Encoder\JsonEncoder;
      use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

      $encoders = array(new XmlEncoder(), new JsonEncoder());
      $normalizers = array(new ObjectNormalizer());

      $serializer = new Serializer($normalizers, $encoders);

      $pessoa = new AppBundle\Classe\Pessoa();
      $pessoa->setNome('Eduarda Amanda');
      $pessoa->setIdade(18);
      $pessoa->setSexo('Feminino');
      $pessoa->setCidade('Caico-RN');

      $jsonContent = $serializer->serialize($pessoa, 'json');
      echo $jsonContent;
		?>
	</body>
</html>