# Generated by Django 4.0.1 on 2022-05-01 18:38

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('analize', '0003_mydata_no_of_backlogs'),
    ]

    operations = [
        migrations.AlterField(
            model_name='mydata',
            name='No_of_backlogs',
            field=models.IntegerField(),
        ),
    ]
