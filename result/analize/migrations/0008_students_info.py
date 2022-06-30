# Generated by Django 4.0.1 on 2022-06-23 11:56

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('analize', '0007_login'),
    ]

    operations = [
        migrations.CreateModel(
            name='students_info',
            fields=[
                ('RollNo', models.CharField(max_length=30, primary_key=True, serialize=False)),
                ('SGPA', models.CharField(max_length=30)),
                ('CGPA', models.CharField(max_length=30)),
                ('Failed_Subjects', models.CharField(max_length=30)),
                ('Passed_Subjects', models.CharField(max_length=30)),
                ('Passed_Out_Year', models.CharField(max_length=30)),
                ('Semester', models.CharField(max_length=30)),
                ('Branch', models.CharField(max_length=30)),
                ('Section', models.CharField(max_length=30)),
            ],
        ),
    ]