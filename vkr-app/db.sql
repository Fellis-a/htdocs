-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 23, 2021 at 09:52 AM
-- Server version: 5.6.39-83.1
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsh84_avkr`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `login` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `login`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `specialty`
--

CREATE TABLE IF NOT EXISTS `specialty` (
  `id_spec` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `title` varchar(64) NOT NULL,
  `type` char(1) NOT NULL,
  PRIMARY KEY (`id_spec`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specialty`
--

INSERT INTO `specialty` (`id_spec`, `code`, `title`, `type`) VALUES
(1, 'АСУб', 'Информатика и вычислительная техника', '1'),
(2, 'ЭВМб', 'Информатика и вычислительная техника', '1'),
(3, 'ИСТбп', 'Информационные системы и технологии (прикладной бакалавриат)', '1'),
(4, 'ИСМб', 'Информационные системы и технологии в машиностроении', '1'),
(5, 'ИСТб', 'Информационные системы и технологии в администрировании', '1'),
(6, 'ИБб', 'Информационная безопасность', '1'),
(7, 'ИИТм', 'Информатика', '2'),
(8, 'КСм', 'Информатика', '2'),
(9, 'АУДм', 'Информатика', '2'),
(10, 'ИСТм', 'Информатика', '2'),
(11, 'АСУбз', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `id_tag` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `note` tinytext NOT NULL,
  PRIMARY KEY (`id_tag`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id_tag`, `title`, `note`) VALUES
(1, 'UI', 'пользовательский интерфейс'),
(2, 'UX', 'пользовательский опыт'),
(3, 'Web', '...'),
(4, 'Экспертная система', ''),
(5, 'Распознавание речи', ''),
(6, 'ORM', ''),
(7, 'ГИС', ''),
(8, 'ГГИС', ''),
(9, 'Android', ''),
(10, 'LMS', ''),
(11, 'Анализ поведения пользователя ', ''),
(12, 'SAP', ''),
(13, 'АСУ', ''),
(14, 'Машиное обучение', ''),
(15, 'Комплексные сети ', ''),
(16, '3D-модели', ''),
(17, 'Когнитивные карты', ''),
(18, 'Распознавание образов', ''),
(19, 'ИС', ''),
(20, 'VR/AR', ''),
(21, 'БД', ''),
(22, 'Виртуализация', ''),
(23, 'Асинхронное программирование', ''),
(24, 'REST', ''),
(25, 'CI/CD', ''),
(26, 'Многослойная архитектура', ''),
(27, 'КИС', ''),
(28, 'Нейронные сети', ''),
(29, 'Автматизированное тестирование ПО', ''),
(30, 'Модель логистической регрессии', ''),
(31, 'Адаптивная сеть нечеткого вывода ANFIS', ''),
(32, 'Моделирование кинематического управления', ''),
(33, 'Имитационное моделирование', ''),
(34, 'Логика', ''),
(35, 'БЗ', ''),
(36, 'АС', ''),
(37, 'API', ''),
(38, 'Статистический анализ', ''),
(39, 'IOS', ''),
(40, 'AR', ''),
(41, 'Геометрическое программирование', ''),
(42, 'Методы оптимизации', '');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id_teach` int(11) NOT NULL AUTO_INCREMENT,
  `fio` varchar(64) NOT NULL,
  `password` varchar(12) NOT NULL,
  `login` varchar(30) NOT NULL,
  `link` varchar(100) NOT NULL,
  `information` text NOT NULL,
  PRIMARY KEY (`id_teach`,`fio`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id_teach`, `fio`, `password`, `login`, `link`, `information`) VALUES
(1, 'Аршинский Вадим Леонидович', '1234', 'arshinskyv@mail.ru', 'http://www.istu.edu/ob_irnitu/person/arshinskiy_vadim_leonidovich', 'кандидат технических наук, доцент\n - доцент, Руководитель центра программной инженерии, доцент института информационных технологий и анализа данных, Ученый совет ИАиАД - член Ученого совета\nаудитория: В-107 \nтелефоны: +7 (3952) 40-51-64\ne-mail: arshinskyv@mail.ru, v20@istu.edu, arshinskyv@istu.edu\n'),
(2, 'Серышева Ирина Анатольевна', '1234', 'sia_cyber@mail.ru', 'http://www.istu.edu/ob_irnitu/person/serysheva_irina_anatolevna', ' - старший преподаватель, старший преподаватель института информационных технологий и анализа данных\nаудитория: В-107 \nтелефоны: +7 (3952) 40-51-62\ne-mail: sia_cyber@mail.ru, v20@istu.edu\n'),
(6, 'Бахвалов Сергей Владимирович', 'кеп', 'епк', 'http://www.istu.edu/ob_irnitu/person/bakhvalov_sergey_vladimirovich', 'кандидат технических наук, доцент\nНаучный руководитель по направленностям аспирантуры - , член Ученого совета, доцент института информационных технологий и анализа данных\ne-mail: bsv@istu.edu\n'),
(8, 'Бахвалова Зинаида Андреевна', '', 'zinand@inbox.ru', 'http://www.istu.edu/ob_irnitu/person/bakhvalova_zinaida_andreevna', 'кандидат технических наук, доцент\n - доцент, доцент института информационных технологий и анализа данных\nаудитория: В-107 \nтелефоны: +7 (3952) 40-51-64\ne-mail: zinand@inbox.ru, v20@istu.edu\n'),
(9, 'Бучнев Олег Сергеевич', '', 'buchnevo81@mail.ru', 'http://www.istu.edu/ob_irnitu/person/buchnev_oleg_sergeevich', 'кандидат технических наук, доцент\n - доцент, доцент института информационных технологий и анализа данных\nаудитория: В-107 \nтелефоны: +7 (3952) 40-51-64\ne-mail: buchnevo81@mail.ru, v20@istu.edu\n'),
(10, 'Григорьев Станислав Валентинович', '', '', 'http://www.istu.edu/ob_irnitu/person/grigorev_stanislav_valentinovich', 'кандидат химических наук, доцент\nзаместитель директора по международной и научной деятельности, Центр компетенций по анализу и управлению на основе данных - руководитель центра, Центр компетенций по анализу и управлению на основе данных - , Ученый совет ИАиАД - член Ученого совета, Студенческое научно-творческое общество «Кибер»  - научный руководитель\nаудитория: В-210А \nтелефоны: +7 (3952) 40-51-61\ne-mail: svg@istu.edu, svg@ex.istu.edu\n'),
(11, 'Гутгарц Римма Давыдовна', '', '', 'http://www.istu.edu/ob_irnitu/person/gutgarts_rimma_davydovna', 'доктор экономических наук, профессор\n - профессор, профессор института информационных технологий и анализа данных, Научный руководитель по направленностям аспирантуры - \nаудитория: В-210А \nтелефоны: +7 (3952) 40-51-64\ne-mail: gutgarc@gmail.com, v20@istu.edu\n'),
(12, 'Копайгородский Алексей Николаевич', '', '', 'http://www.istu.edu/ob_irnitu/person/kopaygorodskiy_aleksey_nikolaevich', 'кандидат технических наук, доцент\n - доцент, Отдел информационных систем - начальник отдела, доцент института информационных технологий и анализа данных\nаудитория: В-300 \nтелефоны: +7 (3953) 40-50-40\ne-mail: digger@istu.edu\n'),
(13, 'Куцый Николай Николаевич', '', '', 'http://www.istu.edu/ob_irnitu/person/kutsyy_nikolay_nikolaevich', 'доктор технических наук, профессор\n - профессор, Лаборатория сетевых технологий   - , Научный руководитель по направленностям аспирантуры - \nаудитория: В-107 \nтелефоны: +7 (3952) 40-51-64\ne-mail: v20@istu.edu\n'),
(14, 'Лукьянов Никита Дмитриевич', '', '', 'http://www.istu.edu/ob_irnitu/person/lukyanov_nikita_dmitrievich', 'Лаборатория сетевых технологий   - \n'),
(15, 'Маланова Татьяна Валерьевна', '', 'malanova_tanya@mail.ru', 'http://www.istu.edu/ob_irnitu/person/malanova_tatyana_valerevna', 'кандидат технических наук, доцент\n - доцент, доцент института информационных технологий и анализа данных\nаудитория: В-107 \nтелефоны: +7 (3952) 40-51-64\ne-mail: malanova_tanya@mail.ru, v20@istu.edu\n'),
(16, 'Массель Людмила Васильевна', '', 'lvmassel@gmail.com', 'http://www.istu.edu/ob_irnitu/person/massel_lyudmila_vasilevna', 'доктор технических наук, профессор\nНаучный руководитель по направленностям аспирантуры - , профессор института информационных технологий и анализа данных\ne-mail: massel@isem.irk.ru\n'),
(17, 'Осипова Елизавета Алексеевна', '', 'osipovaelizaveta@yandex.ru', 'http://www.istu.edu/ob_irnitu/person/osipova_elizaveta_alekseevna', 'кандидат технических наук, доцент\n - доцент, доцент института информационных технологий и анализа данных\nаудитория: В-107 \nтелефоны: +7 (3952) 40-51-64\ne-mail: osipovaelizaveta@yandex.ru, v20@istu.edu\n'),
(18, 'Петров Александр Васильевич', '', '', 'http://www.istu.edu/ob_irnitu/person/petrov_aleksandr_vasilevich', 'доктор технических наук, профессор\n - профессор, член ученого совета, Заслуженный профессор ИРНИТУ, Центр междисциплинарных исследований и проектов - профессор\nтелефоны: +7 (3952) 40-51-62\ne-mail: petrov@istu.edu, v20@istu.edu\n');

-- --------------------------------------------------------

--
-- Table structure for table `vkr`
--

CREATE TABLE IF NOT EXISTS `vkr` (
  `id_vkr` int(11) NOT NULL AUTO_INCREMENT,
  `year` year(4) NOT NULL,
  `title` varchar(120) NOT NULL,
  `mark` varchar(20) NOT NULL,
  `essay` text NOT NULL,
  `tech` varchar(64) NOT NULL,
  `id_teach` int(11) NOT NULL,
  `id_spec` int(11) NOT NULL,
  PRIMARY KEY (`id_vkr`),
  KEY `id_spec` (`id_spec`),
  KEY `id_tech` (`id_teach`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vkr`
--

INSERT INTO `vkr` (`id_vkr`, `year`, `title`, `mark`, `essay`, `tech`, `id_teach`, `id_spec`) VALUES
(6, 2011, 'Экспертная система для оценки пользовательского интерфейса', 'отлично', 'Дипломный проект посвящен разработке модуля «Журнал буровых скважин» для предприятия ОАО «ВостСиб АГП», с целью ускорения процесса обработки данных, полученных в ходе полевых работ и сокращения трудозатрат при оформлении результатов инженерно-геологических изысканий.', '', 1, 5),
(7, 2020, 'Разработка системы поддержки обращений граждан в ОПФР по Иркутской области', 'отлично', 'текст эссе', 'Asterisk 1.1, CMU Sphinx, CMU CLMTK, Python', 9, 10),
(8, 2020, 'Разработка информационной системы диспетчеризации крупногабаритного груза', 'отлично', 'Maecenas sed erat sit amet purus dapibus lobortis.', 'Java EE, Spring, PostgreSQL,OpenStreetMAP', 15, 10),
(9, 2020, 'Разработка принципов построения базы данных горно-геологического назначения', 'отлично', 'Nullam nibh tellus, rutrum quis ornare ut, tempus sed risus. ', 'Android, Micromine', 18, 10),
(10, 2020, 'Применение методов прогнозной аналитики в LMS moodle', 'хорошо', 'Quisque nec scelerisque urna. ', 'Moodle', 14, 10),
(12, 2020, 'Прогнозирование увольнений работников организации на основе информации в корпоративной системе', 'отлично', 'Текст', 'CatBoost, React, Redux, webpack, Java, Spring, Python, PostgreSQ', 11, 10),
(13, 2020, 'Разработка информационной платформы сетевого анализа социальных взаимосвязей в предварительном следствии', 'хорошо', 'Текст', 'Python, NetworkX, XML', 10, 10),
(15, 2020, 'Технологии и средства 3D визуализации в исследованиях энергетики', 'отлично', 'Текст', '', 16, 10),
(16, 2020, 'Когнитивное моделирование в системах устойчивости энергетических систем', 'хорошо', '', '1С предприятие, CogMap, xml\r\n', 12, 10),
(17, 2020, 'Разработка системы идентификации личности студента для LMS moodle', 'хорошо', '', 'Moodle, Docker', 14, 10),
(18, 2020, 'Проектирование и разработка ИС учета приборов СЦБ для ИП Черняев', 'отлично', '', 'Java, SQLite', 18, 5),
(19, 2020, 'Проектирование и разработка VR/AR модуля-конструктора электронных курсов для Центра электронного обучения ИРНИТУ', 'отлично', '', 'Blender, Unity 3D, WebGL, WebAR', 10, 5),
(20, 2020, 'Разработка web-сайта международного междисциплинарного научного партнерства', 'хорошо', '', 'WordPress', 16, 5),
(21, 2020, 'Разработка автоматизированной системы для студенческого медиацентра ИРНИТУ', 'отлично', '', 'С#, ACP.Net Core, MS SQL', 8, 5),
(22, 2020, 'Проектирование и разработка информационно-навигационного приложения ИРНИТУ', 'отлично', '', 'PyCharm, Android, Flutter, Python, Docker, json', 10, 5),
(23, 2020, 'Проектирование и разработка информационной системы мониторинга состояний виртуальных машин на серверах, подключенных к п', 'отлично', '', 'Golang, Docker, Git, GitLab, Linux', 18, 5),
(24, 2020, 'Разработка плагина для обмена данными между WooCommerce и 1С для CMS WordPress', 'отлично', '', 'WordPress, WooCommerce, 1C', 17, 5),
(25, 2020, 'Идентификация ботов в социальной сети \"В-Контакте\"', 'отлично', '', 'VK API, MatLab', 17, 5),
(26, 2020, 'Автоматизация тестирования продукта Vepp АО \"ИСПсистем\"', 'отлично', '', 'PyHamcrest, pytest, Se', 16, 5),
(27, 2020, 'Разработка информационной системы для работы с протоколами УЗИ щитовидной железы', 'отлично', '', 'C#, MS SQL', 9, 5),
(28, 2020, 'Координация движения промышленных манипуляторов с помощью ANFIS-сети', 'отлично', '', 'MatLab', 17, 5),
(29, 2020, 'Автоматизация расчета стоимости коммунальных услуг ТСЖ', 'хорошо', '', '', 8, 5),
(30, 2020, 'Параметрическая оптимизация линейных систем', 'отлично', '', '', 15, 5),
(31, 2019, 'Разработка Android-приложения для определения происхождения алмаза с помощью тепловизора', 'хорошо', '', 'Android, Java', 1, 10),
(34, 2019, 'Разработка алгоритма формирования оптимального плана перевозки негабаритного груза', 'отлично', '', '', 15, 10),
(35, 2019, 'Моделирование эвакуации из здания при пожаре с учетом распространения огня и поведения людей', 'отлично', '', '', 15, 10),
(36, 2019, 'Оценка способов и средств защиты передаваемой информации для системы электронного документооборота в страховой медицинск', 'хорошо', '', '', 6, 10),
(37, 2019, 'Формализация требований для подготовки тестовых наборов данных', 'отлично', '', '', 8, 10),
(38, 2019, 'Формирование индивидуальных предложений пользователям платформы CyberArenaPro с помощью методов искусственного интеллект', 'отлично', '', '', 14, 10),
(39, 2019, 'Унификация и структуризация методики формирования функциональных требований к автоматизированным информационным системам', 'отлично', '', '', 11, 10),
(40, 2019, 'Создание библиотеки для имитационного моделирования процессов обогащения полезных ископаемых в Anylogic', 'отлично', '', 'AnyLogic, java', 18, 10),
(41, 2019, 'Разработка программно-инструментальных средств для оценки состояния системы на основе логико-аксиологического подхода', 'отлично', '', 'Java SE, Java Swing, grModelling', 1, 10),
(42, 2019, 'Оценка эффективности применения облачных технологий', 'хорошо', '', '', 6, 10),
(43, 2019, 'Разработка АС сбора и анализа данных по работе сотрудников АО \"ИСПсистем\"', 'отлично', '', '', 8, 1),
(44, 2019, 'Автоматизация оповещения участников судебных слушаний путем интеграции существующей системы АИС 3.0 и сервиса МТС', 'отлично', '', 'SOAP, Xml, DSO2 ESB, JMS, java, PostgreSQL', 1, 1),
(45, 2019, 'АИС «Мониторинг физической подготовленности студентов ИРНИТУ»', 'отлично', '', 'Java SE, Java FX, SQLite, Apache Commons Math ', 1, 1),
(46, 2019, 'Автоматизированная система по поиску заведений общественного питания в г. Иркутске', 'хорошо', '', '', 11, 1),
(47, 2019, 'Проектирование и разработка автоматизированной системы управления заданиями в отделе ФССП', 'отлично', '', '', 12, 1),
(48, 2019, 'АИС \"Мониторинг обслуживания мостовых сооружений\" для МУП \"Служба эксплуатации мостов\" г. Иркутска', 'отлично', '', '', 8, 1),
(49, 2019, 'Разработка модуля обмена между CRM системами и 1С', 'отлично', '', '', 12, 11),
(50, 2020, 'Построение 3D модели объекта на основании массива изображений', 'отлично', '', 'Python, Flask,  OpenCV, Numpy, Pandas, Pyntcloud, Android, C#, X', 13, 11),
(51, 2019, 'Разработка информационной системы для администрирования устройств удаленного управления', 'хорошо', '', '', 14, 11),
(52, 2019, 'Проектирование информационной системы для магазина «Автозапчасти»', 'удовлетворительно', '', '', 14, 11),
(53, 2019, 'Проектирование и реализация системы для работы с расписанием занятий студентов заочного обучения', 'отлично', '', '', 12, 11),
(54, 2020, 'Анализ мониторинга майнингового оборудования', 'отлично', '', 'php, Laravel, JavaScript, MySQL', 11, 1),
(55, 2020, 'Анализ показаний датчиков МУП \"Водоканал\" г. Шелехова', 'отлично', '', '', 1, 1),
(56, 2020, 'Мобильное приложение \"U Navigation\"', 'отлично', '', 'С#, ARFoundation, ARKit, ARCore', 18, 1),
(57, 2020, 'Интернет-приложение для кондитерской \"Миндаль\"', 'хорошо', '', 'php, MySQL', 11, 1),
(58, 2020, 'Разработка интернет-магазина для сети аптек \"Ваша Аптека\"', 'удовлетворительно', '', 'php, JavaScript, MySQL', 14, 1),
(59, 2020, 'Разработка клиентской части информационно-справочной системы для инженеров-нефтянников', 'отлично', '', 'React, JSX, WS', 17, 1),
(60, 2020, 'Разработка серверной части информационно-справочной системы для инженеров-нефтянников', 'отлично', '', 'Firebase Realtime Database, JSON, Postman, Flutter, Dart ', 17, 1),
(61, 2020, 'Решение задач с применением метода геометрического программирования', 'отлично', '', 'Python, Gpikt', 13, 11);

-- --------------------------------------------------------

--
-- Table structure for table `vkr_tags`
--

CREATE TABLE IF NOT EXISTS `vkr_tags` (
  `id_vkr_tags` int(11) NOT NULL AUTO_INCREMENT,
  `id_vkr` int(11) NOT NULL,
  `id_tags` int(11) NOT NULL,
  PRIMARY KEY (`id_vkr_tags`),
  KEY `vkr_tags_1` (`id_vkr`),
  KEY `vkr_tags_2` (`id_tags`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vkr_tags`
--

INSERT INTO `vkr_tags` (`id_vkr_tags`, `id_vkr`, `id_tags`) VALUES
(1, 6, 4),
(2, 7, 5),
(3, 8, 3),
(4, 8, 6),
(5, 8, 7),
(6, 9, 8),
(7, 9, 9),
(8, 10, 10),
(9, 10, 11),
(10, 12, 12),
(11, 12, 13),
(12, 12, 14),
(13, 13, 15),
(14, 15, 7),
(15, 15, 16),
(16, 15, 3),
(17, 16, 17),
(18, 17, 10),
(19, 17, 18),
(20, 18, 19),
(21, 19, 20),
(22, 19, 3),
(23, 19, 10),
(24, 20, 3),
(25, 21, 3),
(26, 21, 21),
(27, 22, 9),
(28, 23, 22),
(29, 23, 23),
(30, 23, 24),
(31, 23, 25),
(32, 23, 26),
(33, 24, 3),
(34, 24, 27),
(35, 25, 28),
(36, 26, 29),
(37, 27, 30),
(38, 28, 31),
(39, 28, 32),
(40, 31, 9),
(41, 31, 21),
(42, 40, 33),
(43, 41, 34),
(44, 41, 35),
(45, 44, 36),
(46, 44, 21),
(47, 44, 37),
(48, 45, 36),
(49, 45, 38),
(50, 45, 21),
(51, 50, 9),
(52, 50, 16),
(53, 50, 3),
(54, 54, 3),
(55, 54, 21),
(56, 56, 40),
(57, 56, 9),
(58, 56, 39),
(59, 57, 3),
(60, 57, 21),
(61, 58, 3),
(62, 58, 21),
(63, 59, 3),
(64, 59, 21),
(65, 60, 3),
(66, 60, 21),
(67, 60, 37),
(68, 60, 24),
(69, 61, 41),
(70, 61, 42);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `vkr`
--
ALTER TABLE `vkr`
  ADD CONSTRAINT `vkr_ibfk_1` FOREIGN KEY (`id_spec`) REFERENCES `specialty` (`id_spec`),
  ADD CONSTRAINT `vkr_ibfk_2` FOREIGN KEY (`id_teach`) REFERENCES `teacher` (`id_teach`);

--
-- Constraints for table `vkr_tags`
--
ALTER TABLE `vkr_tags`
  ADD CONSTRAINT `vkr_tags_1` FOREIGN KEY (`id_vkr`) REFERENCES `vkr` (`id_vkr`),
  ADD CONSTRAINT `vkr_tags_2` FOREIGN KEY (`id_tags`) REFERENCES `tag` (`id_tag`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
